<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

if (isset($_POST['submit'])) {
    $studentid = $_POST['stuid']; 
    $password = $_POST['stupassword'];
    $dob = $_POST['studob'];
    $firstname = $_POST['stufirstname'];
    $lastname = $_POST['stulastname'];
    $house = $_POST['stuhouse'];
    $town = $_POST['stutown'];
    $county = $_POST['stucounty'];
    $country = $_POST['stucountry'];
    $postcode = $_POST['stupostcode'];
    $image = $_FILES['stuimage']['tmp_name'];

    if ($password)
    {
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    }

    //Getting image data
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));

    $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode, image) 
            VALUES('$studentid', '$passwordhash', '$dob', '$firstname', '$lastname', '$house', '$town', '$county', '$country', '$postcode', '$imagedata')";
    $result = mysqli_query($conn,$sql);

    header("Location: students.php");
}

?>