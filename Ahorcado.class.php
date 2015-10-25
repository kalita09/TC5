<?php
class Ahorcado{

private $palabras = ''; //porq esta inicializado como un caracter y no como array?
private $palabra = '';
private $incognita = array(); //incognita es el array que se va a ir rellenando con las letras que matchean la palabra
private $tamano=0;
private $intentosFallidos=0;

	//setea palabras (de un archivo), palabra=palabras[0] y tamano=strlen(palabra)
	public function __construct() {
		$this->palabras = explode("\n",file_get_contents('palabras.txt'));
		shuffle($this->palabras);
		$this->palabra= $this->palabras[0];
		$this->tamano = strlen($this->palabra);
		echo $this->palabra."g";
		echo $this->tamano."<br>";
	}
	
	public function iniciar(){
		for($i=0; $i<$this->tamano; $i++){
			$this->incognita[$i]="__";
		}
		$this->imprimirIncognita();
		return $incognita;
	} 
	
	public function getTamano(){
		return $this->tamano;	
	}
	
	public function setIntentos($intentosFallidos){
		$this->intentosFallidos= $intentosFallidos;	
	}
	
	public function aumentoIntentos(){
		$this->intentosFallidos+=1;	
	}
	
	public function getPalabra(){
		return $this->palabra;	
	}
	
	public function setPalabra($palabra){
		$this->palabra=$palabra;	
	}
	
	public function imprimirIncognita(){
		for($j=0; $j<$this->tamano; $j++){
			echo $this->incognita[$j]." "; 
		}
	}
	
	public function validar(&$letra,&$palabra,&$incognita,&$seEncuentra){
		for($i=0; $i< strlen($palabra); $i++){
		   if(strcmp($letra, $palabra[$i])==0){
				$incognita[$i] = $letra;
				$seEncuentra = 1;
		   }
		}
		return 	$seEncuentra ;
	}
}
?>


