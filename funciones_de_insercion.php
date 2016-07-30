<?php
	/* CÓDIGO DE LA FUNCIÓN insertAfter(). */
	function insertAfter($matrizOriginal, $elementoNuevo, $after, $comparativa = -1){
		$matrizFinal = array();
		foreach ($matrizOriginal as $keyOriginal=>$valOriginal){
			$matrizFinal[] = $valOriginal;
			if ($comparativa == -1){
				if ($keyOriginal == $after) $matrizFinal[] = $elementoNuevo;
			} else {
				if ($valOriginal[$comparativa] == $after) $matrizFinal[] = $elementoNuevo;
			}
		}
		return $matrizFinal;
	}
	
	/* CÓDIGO DE LA FUNCIÓN insertBefore(). */
	function insertBefore($matrizOriginal, $elementoNuevo, $before, $comparativa = -1){
		$matrizFinal = array();
		foreach ($matrizOriginal as $keyOriginal=>$valOriginal){
			if ($comparativa == -1){
				if ($keyOriginal == $before) $matrizFinal[] = $elementoNuevo;
			} else {
				if ($valOriginal[$comparativa] == $before) $matrizFinal[] = $elementoNuevo;
			}
			$matrizFinal[] = $valOriginal;
		}
		return $matrizFinal;
	}
?>