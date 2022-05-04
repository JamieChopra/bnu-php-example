<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_POST['del'])){
    //Creating local storage of the array to see if checkbox is ticked
    $thischeckbox = $_POST['checkbox'];

    foreach($thischeckbox as $id){
    mysqli_query($conn, "DELETE FROM students WHERE ID=".$id);
    }

    header("Location:delete.php");
}

    mysqli_close($conn);
?>