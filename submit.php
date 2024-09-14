<?php
$first_name = $_POST["fullname"];
$first_last = $_POST["first_last"];
$email = $_POST["email"];
$password = $_POST["password"];
$date = $_POST["date"];
$yearLvl = $_POST["year_level"];


echo "checkbox". json_encode($_POST["checkbox"]);
echo "first name: ". $first_name."<br>";
echo "last name: ". $first_last."<br>";
echo "email: ". $email."<br>";
echo "password: ". $password."<br>";
echo "date: ". $date."<br>";
echo "yearLvl: ". $yearLvl ."<br>";

?>