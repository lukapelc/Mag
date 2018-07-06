<?php
//require_once('baza.php');



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="SVN" lang="SVN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>testmako</title>

</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
    function insertnewperson(){
        
        var Ime=document.forms["post_name"]["ime"].value;
        var Priimek=document.forms["post_name"]["priimek"].value;
        var stevilka=document.forms["post_name"]["stevilka"].value;
				$.ajax({
					type :	'POST',
					url  :	'insert.php',
					data :	 {ime1:Ime, priimek1:Priimek, stevlika1:stevilka},
					error: function (xhr, status, error) {
						var err = eval("(" + xhr.responseText + ")");
  						alert(err.Message);
						alert("Error OGTT: " + error.responseText);
					},
				});					
				
			
    }
    </script>
<form id="post_name">
    ID nov uproabnik: <input type="text" name="ime" style="height:2vw; vertical-align:bottom;">
    <input type="text" name="priimek" style="height:2vw; vertical-align:bottom;">
    <input type="text" name="stevilka" style="height:2vw; vertical-align:bottom;">
    <input name="Submit"  type="submit" value="insert" action="JavaScript:insertnewperson()"/>
</form>

</body>
</html>
