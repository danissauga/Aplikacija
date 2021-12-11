<!DOCTYPE html>
<html>
<head>
<title>Hello!</title>
</head>
<?php
//if ( (isset($_GET['color']) ) and ( $_GET['color'] == 1) ) {$color = "red"; } else { $color= "black"; }

if (isset($_GET['color'])) {
$color = $_GET['color'];
}

?>
<body style="background-color:#<?php echo $color; ?>">
<form id="a" name="a" action="" method="GET">
<input id="color" name="color" placeholder="Iveskite spalva">
<input id="priskirti" name="priskirti" type="submit" value="Priskirti spalva">
</form>

<a href="self.php">Be kintamojo </a><br>
<!--<a href="self.php?color=1">Su kintamuoju </a>-->

</body>
</html>