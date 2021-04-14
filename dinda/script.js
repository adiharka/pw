function validateForm() {
    if( document.person.nama.value == "" ) {
        alert( "Masukkan nama!" );
        document.person.nama.focus() ;
        return false;
     }
    if( document.person.kotalahir.value == "" ) {
        alert( "Masukkan kota lahir!" );
        document.person.kotalahir.focus() ;
        return false;
     }
    if( document.person.date.value == "" ) {
        alert( "Masukkan tanggal!" );
        document.person.date.focus() ;
        return false;
     }
    if( document.getElementById('alamat').value == "" ) {
        alert( "Masukkan alamat!" );
        document.person.date.focus() ;
        return false;
     }
    if( document.person.kota.value == "" ) {
        alert( "Masukkan kota!" );
        document.person.kota.focus() ;
        return false;
     }
  }