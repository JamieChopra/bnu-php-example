<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

if (isset($_POST['submit'])) {
    $studentid = $conn->real_escape_string($_POST['stuid']); 
    $password = $conn->real_escape_string($_POST['stupassword']);
    $dob = $conn->real_escape_string($_POST['studob']);
    $firstname = $conn->real_escape_string($_POST['stufirstname']);
    $lastname = $conn->real_escape_string($_POST['stulastname']);
    $house = $conn->real_escape_string($_POST['stuhouse']);
    $town = $conn->real_escape_string($_POST['stutown']);
    $county = $conn->real_escape_string($_POST['stucounty']);
    $country = $conn->real_escape_string($_POST['stucountry']);
    $postcode = $conn->real_escape_string($_POST['stupostcode']);
    $image =$conn->real_escape_string( $_FILES['stuimage']['tmp_name']);

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