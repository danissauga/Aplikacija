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

function set_color (){
    
}
?>
<body style="background-color:#<?php echo $color; ?>">

<form method = "GET">
<input type="color" oninput="set_color()" id="myColor" value="200" /><br><br>
<div id="myBox" style="width: 200px; height: 200px; background-color: #<?php echo $color; ?>">
   
   <button type="submit">Siųsti duomenis</button>
</div>
</form>



<a href="self.php">Be kintamojo </a><br>
<!--<a href="self.php?color=1">Su kintamuoju </a>-->



</body>
</html>