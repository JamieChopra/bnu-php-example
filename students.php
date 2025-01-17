
<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

 
   // check logged in
   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");
      echo template("templates/partials/tables.php");
      echo template("templates/partials/title.php");

      // Build SQL statment that selects a student's modules
      $sql = "select * from student";

      $result = mysqli_query($conn,$sql);
    
      $data['content'] .= "<form method='post' action='delete.php'>";


      // prepare page content
      $data['content'] .= "<div class='title'>Students</div>";
      $data['content'] .= "<table class='content-table'>";
      $data['content'] .= "<tr><th>Student ID</th><th>Password</th><th>Date of Birth</th><th>First Name</th><th>Last Name</th>
      <th>House</th><th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>Checkbox</th></tr>";
      // Display the modules within the html table
      while($row = mysqli_fetch_array($result)) {
         $data['content'] .= "<tr><td> $row[studentid] </td>";
         $data['content'] .= "<td> $row[password] </td>";
         $data['content'] .= "<td> $row[dob] </td>";
         $data['content'] .= "<td> $row[firstname] </td>";
         $data['content'] .= "<td> $row[lastname] </td>";
         $data['content'] .= "<td> $row[house] </td>";
         $data['content'] .= "<td> $row[town] </td>";
         $data['content'] .= "<td> $row[county] </td>";
         $data['content'] .= "<td> $row[country] </td>";
         $data['content'] .= "<td> $row[postcode] </td>";
         $data['content'] .= "<td> <input type='checkbox' name='checkbox[]' value='$row[studentid]'></td></tr>";
         $data['content'] .= "<td> <img src='getjpg.php?studentid=$row[studentid]' width='100' height='100'></td>";
      }
      $data['content'] .= "</table>";

      $data['content'] .= "<input class='delete' type='submit' name='del' value='DELETE'onclick=\"return confirm('Are you sure you would like to delete that?');\"/>";

      $data['content'] .= "</form>";

      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>



