currentPageColor = '#2760A8';

if(window.location.pathname.endsWith("modify_doctors")) {  
    document.getElementById('menu_element_modify_doctors').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("add_doctors")) {  
    document.getElementById('menu_element_add_doctor').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("planning_doctors")) {  
    document.getElementById('menu_element_planning_doctors').style.backgroundColor = currentPageColor;
}