var today = new Date();
var monthSelected = today.getMonth();
var yearSelected = today.getFullYear();
var daySelected;
var hourSelected;
let dayOfTheWeekList = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche']
let monthsList = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre']
var morningHoursList = [
    '8h','8h15','8h30','8h45',
    '9h','9h15','9h30','9h45',
    '10h','10h15','10h30','10h45',
    '11h','11h15','11h30','11h45'
];
var afternoonHoursList = [
    '14h','14h15','14h30','14h45',
    '15h','15h15','15h30','15h45',
    '16h','16h15','16h30','16h45',
    '17h','17h15','17h30','17h45'
];
var pageSelected = 1;
var casesCalendar =  document.getElementsByClassName('calendar_bloc_number');
var casesHours =  document.getElementsByClassName('dates_bloc');
var arrowHours = document.getElementsByClassName('date_bloc_arrow');
arrowHours[0].addEventListener("click", nextHours);
arrowHours[1].addEventListener("click", previousHours);

fillCalendar(monthSelected, yearSelected);

function fillCalendar(month, year) {

    //clear calendar
    for(let caseCalendar of casesCalendar) {
        caseCalendar.innerHTML = "";
        caseCalendar.classList.remove('active');
    }
    unselectDay();
    unselectHour();
    
    //clear hour cases
    for(let caseHour of casesHours) {
        caseHour.innerHTML = "";
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
        casesCalendar[i].addEventListener("click", select);
        dayOfMonthNumber++;
    }
    
    fillHours();
}

function nextMonth() {
    monthSelected++;
    if(monthSelected>11){
        monthSelected = 0;
    }
    fillCalendar(monthSelected,yearSelected);
}

function previousMonth() {
    monthSelected--;
    if(monthSelected < 0){
        monthSelected = 11;
    }
    fillCalendar(monthSelected,yearSelected);
}

function nextYear() {
    yearSelected++;
    if(yearSelected > 2050) {
        monthSelected = 2050;
    }
    fillCalendar(monthSelected,yearSelected);
}

function previousYear() {
    yearSelected--;
    if(yearSelected < 2020) {
        yearSelected = 2020;
    }
    fillCalendar(monthSelected,yearSelected);
}

function select() {
    if(this.classList.contains('calendar_bloc_number')){
        if(this!=daySelected){
            unselectHour();
            unselectDay();
            daySelected = this;
        } 
    }
    else {
        unselectHour();
        hourSelected = this;
    }

    this.style.backgroundColor = "rgb(39, 96, 168)";
    this.style.color = "white";
}

function unselectDay() {
    if(daySelected != null) {
        daySelected.style.backgroundColor = "";
        daySelected.style.color = "";
        daySelected = null; 
    }
}

function unselectHour() {
    if(hourSelected != null){
        hourSelected.style.backgroundColor = "";
        hourSelected.style.color = "";
        hourSelected = null;
    }
}

function fillHours() {
    unselectHour();
    var hoursList;
    if(pageSelected === 1){   
        hoursList = morningHoursList;
    } 
    else {
        hoursList = afternoonHoursList;
    }
    for(i = 0; i < hoursList.length; i++) {
        casesHours[i].innerHTML = hoursList[i];
        casesHours[i].addEventListener("click", select);
    }
}

function nextHours() {
    if(pageSelected < 1){
        pageSelected++;
        unselectHour();
    }
    fillHours();
}

function previousHours() {
    if(pageSelected > 0){
        pageSelected--;
        unselectHour();
    }
    fillHours();
}
