<?php
$target_dir = "uploads/";
$fileid = uniqid();
$uploadOk = 1;
$target_file = $target_dir . $fileid . '.';
$imageFileType = strtolower(pathinfo( $target_dir . basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION));
$target_file = $target_file . $imageFileType;


// Check if image file is a actual image or fake image
if(isset($_POST["simpan"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $message = "Sorry, file already exists.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  $message = "Sorry, your file is too large.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>