let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();

let dayOfTheWeekList = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche']
let monthsList = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre']

fillCalendar(currentMonth, currentYear);

function fillCalendar(month, year) {

    //clear calendar
    let casesCalendar =  document.getElementsByClassName('calendar_bloc_number');
    for (let caseCalendar of casesCalendar) {
        caseCalendar.innerHTML = "";
        caseCalendar.classList.remove('active');
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