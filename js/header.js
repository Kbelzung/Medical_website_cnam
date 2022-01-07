currentPageColor = '#2760A8';

if(window.location.pathname.endsWith("my_appointments.php")) {  
    document.getElementById('header_element_my_appointment').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("presentation.php")) {  
    document.getElementById('header_element_presentation').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("appointment.php")) {  
    document.getElementById('header_element_appointment').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("administration.php")) {  
    document.getElementById('header_element_administration').style.backgroundColor = currentPageColor;
}
else if(window.location.pathname.endsWith("login.php")) {  
    document.getElementById('header_element_login').style.backgroundColor = currentPageColor;
}