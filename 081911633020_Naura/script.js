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
     if( document.registration.password.value != document.registration.re-password.value) {
        alert( "Password is not same" );
        document.registration.password.focus() ;
        return false;
     }
     return( true );
  }