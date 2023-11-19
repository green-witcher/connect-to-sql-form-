<?php
$fname   = $_POST['fName'];
$lname   = $_POST['lName'];
$email   = $_POST["email"];
$phone   = $_POST["phone"];
$message = $_POST["message"];

echo "First Name: $fname<br>";
    echo "Last Name: $lname<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Message: $message<br>";

$link = mysqli_connect("local" , "root" , "" , "contactform");
  if ($link == false)
               die("ERROR : could not connect." . mysqli_connect_error());

$sql = "INSERT INTO tbl_userInfo (fName, lName, email, phone, message) VALUES ('$fname', '$lname', '$email', '$phone', '$message')";
  if(mysqli_query($link, $sql)){
    echo "Records added succesfully." ;
  }
  else {
    echo "Error: unable to execute $sql. " . mysqli_error($link);
  }

  mysqli_close($link);
?>