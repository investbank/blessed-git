<?php

    // Página Atual
    function paginaAtual($condA) {
        $a = explode("/", $condA);
        $b = explode(".", $a[count($a)-1]);
        $c = $b[count($b)-2];

        return $c;
    }
    
	// Função SE for IGUAL
	function iiF($condA, $condB, $retA, $retB) {
		if (isset($condA) && $condA == $condB) {
            return $retA;
		} else {
            return $retB;
		}
    }
    
    
    // $paginaAtual = paginaAtual($_SERVER["SCRIPT_NAME"]);