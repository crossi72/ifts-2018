
<?php

/**
 * Crea i div all'interno della pagina
 *
 * @param [int] $numeroDiv indica quanti div devono essere creati
 * @param [string] $classe indica quale classe dev'essere attribuita ai div
 * @return void
 */
function CreaDiv($numeroDiv, $classe){
	for ($i = 1; $i <= $numeroDiv; $i++){
		echo "<div class='". $classe ."'></div>";
	}
}

?>