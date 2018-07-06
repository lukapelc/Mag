<?php
/*
 $dbcnx = @mysqli_connect('localhost', 'root', 'root_groot_2018');
if (!$dbcnx ) {
       echo( '<p> Komunikacija s strežnikom SUPB ni uspela . </p>');
    exit();
    }
    if(!@mysqli_select_db('test', $dbcnx)){
        die('<p>Zahtevana podatkovna baza ne obstaja.</p>');
    } 
    */

    $con=mysqli_connect("localhost","root","root_groot_2018","test2");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// ...some PHP code for database "my_db"...

// Change database to "test"
mysqli_select_db($con,"test");

// ...some PHP code for database "test"...

mysqli_close($con);
?>
