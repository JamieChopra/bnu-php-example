<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_SESSION['id'])) {
      //Data 1
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('10895872', 'E8>MNgQvhtte#;,Z', '1959-08-12', 'Travon', 'Walker', '11 Park Road', 'Jacksonville', 'Greater Manchester', 'England', 'M1 2BR')";
      $result = mysqli_query($conn,$sql);

      //Data 2
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('04206948', '4V+d;tDh2hzcSj', '2000-09-11', 'Aidan', 'Hutchinson', '21 Hook Street', 'Plymouth', 'Essex', 'England', 'CM3 8BR')";
      $result = mysqli_query($conn,$sql);

      //Data 3
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('60451902', 'cVnq:w>d>.w3B:>@', '2001-06-20', 'Derek', 'Stingley Jr.', '35 Butcher Road', 'Baton Rouge', 'Louisiana', 'United States', 'LS5 WIN')";
      $result = mysqli_query($conn,$sql);

      //Data 4
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('02625680', 'Hh/)hE=HNy`#3mR', '2000-09-31', 'Ahmad', 'Gardner', '14 Power Road', 'Detroit', 'Michigan', 'United States', 'MI5 1NA')";
      $result = mysqli_query($conn,$sql);

      //Data 5
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
      VALUES('67904608', 'F3~Z4F})yy[n]#u+', '2000-12-15', 'Kayvon', 'Thibodeaux', '99 GOAT Street', 'Los Angeles', 'California', 'United States', 'LA1 5X')";
      $result = mysqli_query($conn,$sql);

      header("Location: students.php");
    }
?>
