var casesCalendar =  document.getElementsByClassName('calendar_bloc_number');
var casesHours =  document.getElementsByClassName('dates_bloc');
var arrowHours = document.getElementsByClassName('date_bloc_arrow');
var cardDoctors = document.getElementsByClassName('doctor_card');
var monthElement = document.getElementById('calendar_months_text');
var yearElement = document.getElementById('calendar_years_text');
var hidden_idDoctor = document.getElementById('hidden_idDoctor');
var hidden_date = document.getElementById('hidden_date');
var hidden_hour = document.getElementById('hidden_hour');

arrowHours[0].addEventListener("click", nextHours);
arrowHours[1].addEventListener("click", previousHours);
for(let cardDoctor of cardDoctors) {
    cardDoctor.addEventListener("click", selection);
}

var doctorSelected;
var today = new Date();
var monthSelected = today.getMonth();
var yearSelected = today.getFullYear();
var daySelected;
var hourSelected;
let dayOfTheWeekList = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche']
let monthsList = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre']
var morningHoursList = [
    '8h00','8h15','8h30','8h45',
    '9h00','9h15','9h30','9h45',
    '10h00','10h15','10h30','10h45',
    '11h00','11h15','11h30','11h45'
];
var afternoonHoursList = [
    '14h00','14h15','14h30','14h45',
    '15h00','15h15','15h30','15h45',
    '16h00','16h15','16h30','16h45',
    '17h00','17h15','17h30','17h45'
];
var pageSelected = 1;

fillCalendar();

function fillCalendar() {
    clearDays();
    clearHours();

    monthElement.innerHTML = monthsList[monthSelected];
    yearElement.innerHTML = yearSelected;

    let dateToday = new Date(today);
    let todayDayOfMonthNumber = dateToday.getDate();

    let firstDay = getDayOfWeekFirstOfMonth();
    let daysInMonth = 32 - new Date(yearSelected, monthSelected, 32).getDate();
    let dayOfMonthNumber = 1;
    for(let i = firstDay - 1; i < daysInMonth + (firstDay-1); i++){
        casesCalendar[i].innerHTML=dayOfMonthNumber;
        if(monthSelected == today.getMonth() && yearSelected == today.getFullYear()) {
            if(dayOfMonthNumber >= todayDayOfMonthNumber) {
                casesCalendar[i].classList.add('active');
                casesCalendar[i].addEventListener("click", selection);
            }
        }
        else{
            casesCalendar[i].classList.add('active');
            casesCalendar[i].addEventListener("click", selection);
        }

        dayOfMonthNumber++;
    }
}

function clearDays() {
    for(let caseCalendar of casesCalendar) {
        caseCalendar.innerHTML = "";
        caseCalendar.classList.remove('active');
    }
    unselectDay();
}

function clearHours() {
    for(let caseHour of casesHours) {
        caseHour.innerHTML = "";
        caseHour.removeEventListener("click", selection);
        caseHour.classList.remove("dates_bloc_active");
    }
    unselectHour();
    reset_infor_patient();
}

function getDayOfWeekFirstOfMonth() {
    let firstDay = (new Date(yearSelected, monthSelected)).getDay();
    //if firstDay = 0 (Sunday) then it's need to be 7 for our grid
    if(firstDay == 0){
        firstDay = 7;
    }
    return firstDay;
}

function nextMonth() {
    monthSelected++;
    if(monthSelected>11){
        monthSelected = 0;
    }
    fillCalendar();
}

function previousMonth() {
    monthSelected--;
    if(yearSelected==today.getFullYear()){
        if(monthSelected<(today.getMonth())){
            monthSelected=(today.getMonth());
        }
    }
    if(monthSelected < 0){
        monthSelected = 11;
    }
    fillCalendar();
}

function nextYear() {
    yearSelected++;
    if(yearSelected > (today.getFullYear()+2)) {
        yearSelected = (today.getFullYear()+2);
    }
    fillCalendar();
}

function previousYear() {
    yearSelected--;
    if(yearSelected < today.getFullYear()) {
        yearSelected = today.getFullYear();
    }
    fillCalendar();
}

function selection() {
    if(this.classList.contains('doctor_card')){
        unselectDoctor();
        unselectDay();
        unselectHour();
        clearHours();
        doctorSelected = this;
    }
    else if(this.classList.contains('calendar_bloc_number')){
        if(doctorSelected != null) {
            if(this!=daySelected) {
                unselectDay();
                unselectHour();
                clearHours();
                daySelected = this;
                fillHoursCalendar();
            }
        }
    }
    else {
        unselectHour();
        hourSelected = this;
        update_infos_patient();
    }

    if(doctorSelected != null){
        this.style.backgroundColor = "rgb(39, 96, 168)";
        this.style.color = "white";
    }
}

function unselectDoctor() {
    if(doctorSelected != null) {
        doctorSelected.style.backgroundColor = "";
        doctorSelected.style.color = "";
        doctorSelected = null;
    }
}

function unselectDay() {
    if(daySelected != null) {
        daySelected.style.backgroundColor = "";
        daySelected.style.color = "";
        daySelected = null;
    }
}

function unselectHour() {
    if(hourSelected != null) {
        hourSelected.style.backgroundColor = "";
        hourSelected.style.color = "";
        hourSelected = null;
    }
}

function nextHours() {
    if(pageSelected < 1){
        pageSelected++;
        unselectHour();
        fillHoursCalendar();
    }
}

function previousHours() {
    if(pageSelected > 0){
        pageSelected--;
        unselectHour();
        fillHoursCalendar();
    }
}

function getxhr() {
    var xhr = null;
    if (window.XMLHttpRequest) {
      xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
      try {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (e) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
      }
    }
    return xhr;
}

function fillHoursCalendar() {
    let idDoctor = doctorSelected.getAttribute("value");
    let xhr = getxhr();
    let url = "http://medicalwebsitecnam/database_access/request_appointments_doctor.php?idDoctor="+idDoctor+"&year="+yearSelected+"&month="+(monthSelected+1)+"&day="+daySelected.innerHTML;
    xhr.open("GET",url,true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                let timesUsed = JSON.parse(xhr.responseText);
                let timesDisplayed = [];
                if(pageSelected==1) {
                    timesDisplayed = [...morningHoursList];
                } else {
                    timesDisplayed = [...afternoonHoursList];
                }
                
                for(let i = 0; i < timesDisplayed.length; i++) {
                    for(let timeUsed of timesUsed) {
                        
                        if(timesDisplayed[i] == timeUsed.time) {
                            casesHours[i].innerHTML = timesDisplayed[i];
                            casesHours[i].addEventListener("click", selection);
                            casesHours[i].classList.add("dates_bloc_active");
                        }
                    }
                }
            }
        }
    };
    xhr.send(null);
}

function update_infos_patient() {
    let idDoctor = doctorSelected.getAttribute("value");
    let xhr = getxhr();
    let url = "http://medicalwebsitecnam/database_access/get_appointment_patient_infos.php?idDoctor="+idDoctor+"&year="+yearSelected+"&month="+(monthSelected+1)+"&day="+daySelected.innerHTML+"&hour="+hourSelected.innerHTML;
    xhr.open("GET",url,true);

    console.log(url)
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                let appointment = JSON.parse(xhr.responseText);
                console.log(appointment);
                console.log(appointment[0].first_name);
                document.getElementById('text_patient').value = appointment[0].first_name + " " + appointment[0].last_name;
                document.getElementById('text_reason').value = appointment[0].reason;
                document.getElementById('checkbox_first_appointment').checked = appointment[0].first_appointment;
                document.getElementById('textarea_note').value = appointment[0].note;
            }
        }
    };
    xhr.send(null);
}

function reset_infor_patient() {
    document.getElementById('text_patient').value = "";
    document.getElementById('text_reason').value = "";
    document.getElementById('checkbox_first_appointment').checked = false;
    document.getElementById('textarea_note').value = "";
}