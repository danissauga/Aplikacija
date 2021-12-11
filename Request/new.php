<!DOCTYPE html>
<html>
<head>
<title>Inga</title>
</head>
<?php




if ( (isset($_GET['go']) ) and ( $_GET['go'] == 1) )
 {$color = "green"; } 

 if ( (isset($_POST['go']) ) and ( $_POST['go'] == 1) )
 {$color = "yellow"; }   
//if (isset($_GET['color'])) {
//$color = $_GET['color'];
//}

?>
<body style="background-color:<?php echo $color; ?>">

<form id="a" name="a" action="" method="GET">
<input type="hidden" name="go" value="1"/>
<button  type="submit">Žalia</button>
</form>

<form id="b" name="b" action="" method="POST">
<input type="hidden" name="go" value="1"/>
<button  type="submit">Geltona</button>
</form>

</body>
</html>