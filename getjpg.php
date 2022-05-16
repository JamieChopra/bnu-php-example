<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   $imageid = $conn->real_escape_string($_GET['studentid']);

   $sql = "SELECT image FROM student WHERE studentid= '$imageid'";

    
   $result = mysqli_query($conn, $sql);

   $row = mysqli_fetch_array($result);

   $displayimage = $row['image'];

   echo $displayimage;

?>