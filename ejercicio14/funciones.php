<?php 
    function obtenerDiagonalPrincipal($matriz, $n){
        $diagonalPrincpal = [];
        for($i=0; $i<$n ; $i++){
            $diagonalPrincpal[$i] = $matriz[$i][$i];
        }
        return $diagonalPrincpal;
    }

    function obtenerDiagonalSecundaria($matriz, $n){
        $diagonalSecundaria = [];
        for($i=$n-1; $i>=0 ; $i--){
            $diagonalSecundaria[($n-1)-$i] = $matriz[($n-1)-$i][$i];
        }

        return $diagonalSecundaria;
    }

    function obtenerSumatoriaMatriz($matriz,$n){
        $sumatoria = 0;
        for($i = 0 ; $i<$n; $i++){
            for($j = 0 ; $j<$n; $j++){
                $sumatoria += $matriz[$i][$j];
            }       
        }      
        return $sumatoria;
    }
?>