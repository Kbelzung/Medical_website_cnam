let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();

let dayOfTheWeekList = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche']
let monthsList = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre']

var casesCalendar =  document.getElementsByClassName('calendar_bloc_number');
var dayBlocSelected;

var casesHours =  document.getElementsByClassName('dates_bloc');
var hoursList = [
    '8h','8h15','8h30','8h45',
    '9h','9h15','9h30','9h45',
    '10h','10h15','10h30','10h45',
    '11h','11h15','11h30','11h45',
    '14h','14h15','14h30','14h45',
    '15h','15h15','15h30','15h45',
    '16h','16h15','16h30','16h45',
    '17h','17h15','17h30','17h45'
]

fillCalendar(currentMonth, currentYear);
fillHours();

function fillCalendar(month, year) {

    //clear calendar
    for(let caseCalendar of casesCalendar) {
        caseCalendar.innerHTML = "";
        caseCalendar.classList.remove('active');
    }
    
    //clear hour cases
    for(let caseHour of casesHours) {
        caseHour.innerHTML = "";
        //caseHour.classList.remove('dates_bloc_active');
        caseHour.addEventListener("click", hourToggle);
    }
    
    //fill month
    let monthElement = document.getElementById('calendar_months_text');
    monthElement.innerHTML = monthsList[month];
    
    //fill year
    let yearElement = document.getElementById('calendar_years_text');
    yearElement.innerHTML = year;

    let firstDay = (new Date(year, month)).getDay();
    //if firstDay = 0 (Sunday) then it's need to be 7 for our grid
    if(firstDay == 0){
        firstDay = 7;
    }
    let daysInMonth = 32 - new Date(year, month, 32).getDate();

    var dayOfMonthNumber = 1;
    for(let i = firstDay - 1; i < daysInMonth; i++){
        casesCalendar[i].innerHTML=dayOfMonthNumber;
        casesCalendar[i].classList.add('active');
        casesCalendar[i].addEventListener("click", buttontoggle);
        dayOfMonthNumber++;
    }
}

function nextMonth() {
    currentMonth++;
    if(currentMonth>11){
        currentMonth = 0;
    }
    fillCalendar(currentMonth,currentYear);
}

function previousMonth() {
    currentMonth--;
    if(currentMonth < 0){
        currentMonth = 11;
    }
    fillCalendar(currentMonth,currentYear);
}

function nextYear() {
    currentYear++;
    if(currentYear > 2050) {
        currentMonth = 2050;
    }
    fillCalendar(currentMonth,currentYear);
}

function previousYear() {
    currentYear--;
    if(currentYear < 2020) {
        currentYear = 2020;
    }
    fillCalendar(currentMonth,currentYear);
}

function buttontoggle() {
    if(document.getElementById(this.id).classList.contains('active')) {
        //unselect a bloc
        if(dayBlocSelected!=null){
            dayBlocSelected.classList.remove('selected');
        }
        
        //update bloc selected
        dayBlocSelected = document.getElementById(this.id);
        dayBlocSelected.classList.add('selected');
    }
}

function hourToggle() {
    if(this.style.backgroundColor =="rgb(39, 96, 168)"){
        this.style.backgroundColor = "";
        this.style.color = "";
    }
    else{
       this.style.backgroundColor = "rgb(39, 96, 168)";
       this.style.color = "white"; 
    }
}

function fillHours() {
    for(i=0;i<16;i++) {
        casesHours[i].innerHTML = hoursList[i];
    }
}
