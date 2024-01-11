<?php


function ranked ($vitorias){
    $rank= "";
    if( $vitorias<=10){
       $rank = " ferro";
    }else if ($vitorias>=11 && $vitorias<=20){
        $rank= "bronze";
    }else if ($vitorias>=21 && $vitorias<=50){
        $rank= "prata";
    }else if ($vitorias>=51 && $vitorias<=80){
        $rank= "ouro";
    }else if ($vitorias>=81 && $vitorias<=90){
        $rank= "platina";
    }else if ($vitorias>=91 && $vitorias<=100){
        $rank= "diamante";
    }else if ($vitorias>=101){
        $rank= "Lendário";
    }else {
        $rank = "Classificação indefinida";
    }
    return "você tem $vitorias vitorias. Seu Rank é: $rank";
}


$resultadoRank= ranked(22);
echo $resultadoRank;
