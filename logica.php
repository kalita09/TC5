<?php
$palabras = explode("\n",file_get_contents('palabras.txt'));
shuffle($palabras);
$palabra=$palabras[0];
$tamano = strlen($palabra);
echo $palabra;
echo $tamano."<br>";

 
 	if (empty($_POST)) {
 	
		$palabra=$palabras[0];//$palabras[0] tomada de $palabras[0]
		$incognita=array();
		$intentosFallidos=0;
			for($i=0; $i<$tamano; $i++)
			   {
			   $incognita[$i]="__";
			   
			   }
			   $cadenaig=serialize($incognita);

			  
			 for($j=0; $j<$tamano; $j++)
			 {
			   echo $incognita[$j]." "; 
			 }
			
		
		
		
	

	}else{
		
		$palabra = $_POST['palabra'];
		$tamano = strlen($palabra);
		$seEncuentra = $_POST['seEncuentra'];
		$letra = strtoupper($_POST['valor']);
		$incognita = unserialize(stripslashes($_POST['incognita']));
		$intentosFallidos=$_POST['intentosFallidos'];
		


		for($i=0; $i<$tamano; $i++){
		   if(strcmp($letra,$palabra[$i])==0){
		   	$incognita[$i] = $letra;
		   	$seEncuentra = 1;
		   }
		}
		
		if($seEncuentra==0){
			 echo "No esta ";
			 $intentosFallidos++;
		}else{
		
		}
		
		
		for($j=0; $j<$tamano; $j++)
			 {
			   echo $incognita[$j]." "; 
		}
			
		echo $intentosFallidos;
	
	}
	

?>


<?php
function dibujar($intentosFallidos)
{
$dibujo="0.png";
	switch ($intentosFallidos) {
	    case 0:
		$dibujo="0.png";
		break;
	    case 1:
		$dibujo="1.png";
		break;
	    case 2:
		$dibujo="2.png";
		break;
	    case 3:
		$dibujo="3.png";
		break;
	    case 4:
		$dibujo="4.png";
		break;
	    case 5:
		$dibujo="5.png";
		break;
	    case 6:
		$dibujo="6.png";
		break;

	    default:
		$dibujo="0.png";
		
	}
	return $dibujo;
}
?>

<form method='post'>
<input name='valor' />

<input type='hidden' name='palabra' value="<?php echo $palabra; ?>" />
<input type='hidden' name='incognita' value='<?php echo serialize($incognita) ?>' />
<input type='hidden' name='seEncuentra' value="<?php echo 0; ?>" />
<input type='hidden' name='intentosFallidos' value="<?php echo $intentosFallidos; ?>" />
<input type='submit' value='adivinar' />
</form>
<img src="<?php echo dibujar($intentosFallidos); ?>" width="256" height="200" />
<a href='logica.php'>Reiniciar</a>


