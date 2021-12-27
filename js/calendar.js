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
    }
    
    //fill month
    let monthElement = document.getElementById('calendar_months_text');
    monthElement.innerHTML = monthsList[currentMonth];
    
    //fill year
    let yearElement = document.getElementById('calendar_years_text');
    yearElement.innerHTML = currentYear;

    let firstDay = (new Date(year, month)).getDay();
    let daysInMonth = 32 - new Date(year, month, 32).getDate();

    
    var dayOfMonthNumber = 1;
    for(let i = firstDay; i < daysInMonth; i++){
        casesCalendar[i].innerHTML=dayOfMonthNumber;
        casesCalendar[i].classList.add('active');
        dayOfMonthNumber++;
    }
}

