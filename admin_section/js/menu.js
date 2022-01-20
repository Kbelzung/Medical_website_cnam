currentPageColor = '#2760A8';

if(window.location.pathname.endsWith("my_appointments")) {  
    document.getElementById('header_element_my_appointment').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("presentation")) {  
    document.getElementById('header_element_presentation').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("appointment")) {  
    document.getElementById('header_element_appointment').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("administration")) {  
    document.getElementById('header_element_administration').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("login")) {  
    document.getElementById('header_element_login').style.backgroundColor = currentPageColor;
}