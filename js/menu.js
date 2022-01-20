currentPageColor = '#2760A8';

if(window.location.pathname.endsWith("/")) {  
    document.getElementById('menu_element_presentation').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("doctors")) {  
    document.getElementById('menu_element_doctors').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("my_appointments")) {  
    document.getElementById('menu_element_my_appointment').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("appointment")) {  
    document.getElementById('menu_element_appointment').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("administration")) {  
    document.getElementById('menu_element_administration').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("login")) {  
    document.getElementById('menu_element_login').style.backgroundColor = currentPageColor;
}