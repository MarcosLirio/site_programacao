<?php
    function imc() {
        $peso = readline("Digite o seu peso: ");
        $altura = readline("Digite a sua altura: ");
        $total = $peso / ($altura * $altura);
    
        
        if($total < 18.5) {
            echo "Voçê está abaixo do peso.";
        } else if($total >= 18.5 && $total <= 25.9) {
            echo "Voçê está no seu peso ideal.";
        } else if($total >= 25 && $total <= 29.9) {
            echo "Voçê está acima do peso.";
        } else if($total >= 30.0 && $total <= 39.9) {
            echo "Obesidade de grau 2";
        } else {
            echo "Obesidade grave de grau 3";
        }   
    }
?>