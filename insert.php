<html>
<body>
<?php
require_once('baza.php');

if (isset($_POST['ime1'])){
    $name=$_POST['ime1'];
    $lastname=$_POST['priimek1'];
	$St=$_POST['stevilka1'];
	$query = "INSERT INTO testMarko (ime, priimek, stevilka)  VALUES ('$name', '$lastname' , '$St')";
	$R1 = mysqli_query($query);
	//if (!$R1) {
	//die('Invalid query: ' . mysql_error());
	//}
	///unset($_POST);
}

?>
</body>
</html>