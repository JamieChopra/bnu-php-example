<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_POST['del'])){
    //Creating local storage of the array to see if checkbox is ticked
    $thischeckbox = $_POST['checkbox'];

    foreach($thischeckbox as $id){
        $protectedid = $conn->real_escape_string($id);
        mysqli_query($conn, "DELETE FROM student WHERE studentid=".$id);
    }

    header("Location:students.php");
}

    mysqli_close($conn);
?>