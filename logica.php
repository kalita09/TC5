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
		
		
		$incognita = unserialize(stripslashes($_POST['incognita']));
		
		

		//echo $incognita[0];	
		for($i=0; $i<$tamano; $i++){
		   if(strcmp($_POST['valor'],$palabra[$i])==0){
		   $incognita[$i]=$_POST['valor'];
		   }
		}
		for($j=0; $j<$tamano; $j++)
			 {
			   echo $incognita[$j]." "; 
		}
			

	
	}

?>
<form method='post'>
<input name='valor' />

<input type='hidden' name='palabra' value="<?php echo $palabra; ?>" />

<input type='hidden' name='incognita' value='<?php echo serialize($incognita) ?>' />
<input type='submit' value='adivinar' />
</form>
<a href='logica.php'>Reiniciar</a>


