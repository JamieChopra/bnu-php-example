<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

if (isset($_POST['submit'])) {
    $studentid = ['stuid']; 
    $password = $_POST['stupassword'];
    $dob = $_POST['studob'];
    $firstname = $_POST['stufirstname'];
    $lastname = $_POST['stulastname'];
    $house = $_POST['stuhouse'];
    $town = $_POST['stutown'];
    $county = $_POST['stucounty'];
    $country = $_POST['stucountry'];
    $postcode = $_POST['stupostcode'];
    $image = $_POST['stuimage'];


    $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode) 
            VALUES('$studentid', '$password', '$dob', '$firstname', '$lastname', '$house', '$town', '$county', '$country', '$postcode')";
    $result = mysqli_query($conn,$sql);
}

?>

<h2>Add Student</h2>
   <form name="studetails" action="" method="post">
   ID :
   <input name="stuid" type="text" required/><br/>
   Password :
   <input name="stupassword" type="text" required/><br/>
   Date of Birth :
   <input name="studob" type="text" required/><br/>
   First Name :
   <input name="stufirstname" type="text" required/><br/>
   Surname :
   <input name="stulastname" type="text" required/><br/>
   Number and Street :
   <input name="stuhouse" type="text" required/><br/>
   Town :
   <input name="stutown" type="text" required/><br/>
   County :
   <input name="stucounty" type="text" required/><br/>
   Country :
   <input name="stucountry" type="text" required><br/>
   Postcode :
   <input name="stupostcode" type="text" required/><br/>
   Image :
   <input name="stuimage" type="file" required/><br/>

   <input type="submit" value="Submit" name="submit"/>
   </form>
