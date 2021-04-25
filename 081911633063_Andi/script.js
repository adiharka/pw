function setNewImage(id) {
    let el = document.getElementById(id)
    el.src=el.getAttribute("hover")
}

function setOldImage(id) {
    let el = document.getElementById(id)
    el.src=el.getAttribute("old")
}

function validateForm() {
  var x = document.forms["absen"]["captcha"].value;
  if (x != "w68hp") {
    alert("Masukkan Captcha dengan benar");
    return false;
  }
  else {
    alert("Sukses absen")
  }
}

function hover(id) {
  let el = document.getElementById(id);
  el.classList.toggle('active');
  // el.style.fill = 'white';
}