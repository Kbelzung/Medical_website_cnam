var dayBlocSelected;

function buttontoggle(idBloc) {
    //unselect a bloc
    if(dayBlocSelected!=null){
        dayBlocSelected.classList.remove('selected');
    }
    
    //update bloc selected
    dayBlocSelected = document.getElementById(idBloc);
    dayBlocSelected.classList.add('selected');
}