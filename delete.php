<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_POST['del'])){
    //Creating local storage of the array to see if checkbox is ticked
    $thischeckbox = $_POST['checkbox'];

    $i = 0;

    while($i < $thischeckbox){
        $deleterecord = $_POST['checkbox'][$i];

        mysqli_query($conn,$sql "DELETE FROM students WHERE id =$thischeckbox )";

        $i++;
    }
}

    mysqli_close($conn, $sql)
?>