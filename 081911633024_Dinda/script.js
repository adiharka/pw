function setNewImage(id) {
    let el = document.getElementById(id)
    el.src=el.getAttribute("hover")
}

function setOldImage(id) {
    let el = document.getElementById(id)
    el.src=el.getAttribute("old")
}

function validateForm() {
  if( document.registration.name.value == "" ) {
    alert( "Please provide your name!" );
    document.registration.name.focus() ;
    return false;
 }
 if( document.registration.email.value == "" ) {
    alert( "Please provide your Email!" );
    document.registration.email.focus() ;
    return false;
 }
 if( document.registration.hp.value == "" ) {
    alert( "Please provide your phone number!" );
    document.registration.hp.focus() ;
    return false;
 }
 if( document.registration.password.value == "" ) {
    alert( "Please fill your password" );
    document.registration.password.focus() ;
    return false;
 }
 return( true );
}

function validateForm2() {
 if( document.registration2.email.value == "" ) {
    alert( "Please provide your Email!" );
    document.registration.email.focus() ;
    return false;
 }
 if( document.registration2.password.value == "" ) {
    alert( "Please fill your password" );
    document.registration.password.focus() ;
    return false;
 }
 return( true );
}