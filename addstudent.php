<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

?>

<h2>Add Student</h2>
   <form enctype ='multipart/form-data' name="studetails" action="savestudent.php" method="post">
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
   <input name="stuimage" type="file" required accept='image/png image/jpg'/><br/>

   <input type="submit" value="Submit" name="submit"/>
   </form>
