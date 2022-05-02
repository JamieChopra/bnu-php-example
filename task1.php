<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_SESSION['id'])) {

      $sql = "insert"
      
      $result = mysqli_query($conn,$sql);

    }
?>
