<html>
<body>
<?php
require_once('baza.php');

if (isset($_POST['ime1'])){
    $name=$_POST['ime1'];
    $lastname=$_POST['priimek'];
	$St=$_POST['stevilka'];
	$query = "INSERT INTO test2 (ime, priimek, stevilka)  VALUES ' $name', '$lastname' , '$St')";
	$R1 = mysql_query($query);
	if (!$R1) {
	die('Invalid query: ' . mysql_error());
	}
	unset($_POST);
}

?>
</body>
</html>0