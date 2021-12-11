<!DOCTYPE html>
<html>
<head>
<title>Inga</title>
</head>
<?php

  $skaicius = rand(3,10);
  $raides = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
  for ($i=0; $i<$skaicius; $i++){
    ?> <input type="checkbox" id="letter" name="letters" value=""> <?php 
    foreach ($raides as $letters ){
        
    }
  }
   
  
?>
<body style="background-color:black">
<form id="a" name="a" action="" method="POST"> 
<input type="hidden" name="go" value="1"/>
<button  type="submit">Siusti</button>
</form>

</body>
</html>