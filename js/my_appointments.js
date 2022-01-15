var validationButtons =  document.getElementsByClassName('validation');

for(let validationButton of validationButtons){
    validationButton.addEventListener("click", deleteAppointment);
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

function deleteAppointment() {
    let idAppointment = this.closest("tr").getAttribute("value");

    let xhr = getxhr();
    let url = "http://medicalwebsitecnam/delete_appointment.php?idAppointment="+idAppointment;

    xhr.open("DELETE",url,true);
    xhr.send(null);
    window.location.reload();
}