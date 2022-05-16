<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

echo template("templates/partials/header.php");
echo template("templates/partials/nav.php"); 
echo template("templates/partials/formdesign.php"); 
echo template("templates/partials/title.php");

?>

<div class='title'>Add Student</div><br/>
   <form enctype ='multipart/form-data' name="studetails" action="savestudent.php" method="post">
   <label>ID :</label>
   <input name="stuid" type="text" required/><br/></br>
   <label>Password :</label>
   <input name="stupassword" type="text" required/><br/></br>
   <label>Date of Birth :</label>
   <input name="studob" type="text" required/><br/></br>
   <label> First Name :</label>
   <input name="stufirstname" type="text" required/><br/></br>
   <label>Surname :</label>
   <input name="stulastname" type="text" required/><br/></br>
   <label>Number and Street :</label>
   <input name="stuhouse" type="text" required/><br/></br>
   <label>Town :</label>
   <input name="stutown" type="text" required/><br/></br>
   <label>County :</label>
   <input name="stucounty" type="text" required/><br/></br>
   <label>Country :</label>
   <input name="stucountry" type="text" required><br/></br>
   <label>Postcode :</label>
   <input name="stupostcode" type="text" required/><br/></br>
   <label>Image :</label>
   <input name="stuimage" type="file" accept='image/png image/jpg' required/><br/><br/>

   <input class='sub-btn' type="submit" value="Submit" name="submit"/>
   </form>
