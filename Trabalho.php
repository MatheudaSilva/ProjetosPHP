<?php
function doar($peso = 52,$idade =56) {
	if($idade < 18 && $peso < 50){
		echo "Desculpe, idade e peso está abaixo do permitido";
	}else if($idade > 69 && $peso < 50){
		echo "Desculpe, idade esta acima do permitido e peso abaixo do permitido";
	}else if ($idade < 18 && $peso > 50){
        echo "Desculpe, idade abaixo do permitido";
    }else if ($idade > 69 && $peso > 50){
        echo "Desculpe, idade acima do permitido";
    }else if ($peso < 50 ){
		echo "Desculpe, peso abaixo do permitido";
	}else {
        echo "Pode realizar a doação";
    }
}
doar();
?>