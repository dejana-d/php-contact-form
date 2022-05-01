<?php

// if statement to check if form was submitted

if (isset($_POST['submit'])){
 
// get data the user input

$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];


// other variables for mail function
$mailTo = "dd595@cam.ac.uk";
$headers = "From: ".$mailFrom;
$txt = "You have received an email from ".$name.".\n\n".$message;



mail($mailTo, $subject, $txt, $headers);
// function to take to page when this is done
header("location: index.php?mailsent");
}