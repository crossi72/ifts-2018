<?php

/**
 * Crea il contenuto di una pagina HTML costruendo la struttura a partire da due array
 *
 * @return void
 */
function ElaboraArray(){
	$arrayHTML = ["div", "/div", "div" , "span", "/span", "/div"];
	$arrayClasses[0] = ["blu", "largo", "basso"];
	$arrayClasses[1] = [];
	$arrayClasses[2] = ["rosso", "stretto", "alto"];
	$arrayClasses[3] = ["bianco", "stretto", "basso"];
	$arrayClasses[4] = [];
	$arrayClasses[5] = [];

	for ($i = 0; $i < count($arrayHTML); $i++) {
		echo '<' . $arrayHTML[$i] . Classes($arrayClasses[$i]) . '>';
	}
};

/**
 * Crea la stringa contenente le classi estraendo gli elementi dall'array
 *
 * @param [type] $array
 * @return void
 */
function Classes($array){
	$result = "";

	if(count($array)){
		// se l'arry non è vuoto compilo le classi
		$result = ' class = "';

		for ($i = 0; $i < count($array); $i++){
			$result .= $array[$i] . " ";
		}
		
		//chiudo le virgolette della stringa contenente le classi
		$result .= '"';
	}

	return $result;
}

?>