<?php
 $dbcnx = @mysqli_connect('localhost', 'mysqlroot', 'root_groot_2018');
if (!$dbcnx ) {
       echo( '<p> Komunikacija s strežnikom SUPB ni uspela . </p>');
    exit() ;
    }
    if(!@mysqli_select_db('test', $dbcnx)){
        die('<p>Zahtevana podatkovna baza ne obstaja.</p>');
    } 
?>