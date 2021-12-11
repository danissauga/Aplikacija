<!DOCTYPE html>
<html>
<head>
<title>Inga</title>
</head>
<?php


if (isset($_POST['go'])) { 
    header("Location: ./rose.php"); 
    
}
  
//if (isset($_GET['color'])) {
//$color = $_GET['color'];
//}

?>
<body style="background-color:pink">

<form id="a" name="a" action="" method="POST">
<input type="hidden" name="go" value="1"/>
<button  type="submit">Go to rose</button>
</form>

</body>
</html>