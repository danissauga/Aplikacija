<!DOCTYPE html>
<html>
<head>
<title>Inga</title>
</head>
<?php


if (isset($_GET['go'])) { 
    header("Location: ./red.php"); 
    
}
  
//if (isset($_GET['color'])) {
//$color = $_GET['color'];
//}

?>
<body style="background-color:blue">

<form id="a" name="a" action="" method="GET">
<input type="hidden" name="go" value="1"/>
<button  type="submit">Į raudoną</button>
</form>

</body>
</html>