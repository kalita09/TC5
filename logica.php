<?php
$palabras = explode("\n",file_get_contents('palabras.txt'));
shuffle($palabras);

echo $palabras[0];

$tamano = strlen($palabras[0]);
echo $tamano."<br>";
$incognita=array();
for($i=0; $i<$tamano; $i++)
   {
   $incognita[$i]="__";
   
   }
  
 for($j=0; $j<$tamano; $j++)
 {
   echo $incognita[$j]." "; 
 }

?>

<form method='post'>
<input name='valor' />
<input type='submit' value='adivinar' />
</form>

