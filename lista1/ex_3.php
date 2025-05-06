<?php 
require_once "ex_1.php";
require_once "ex_2.php";

function mediaPreco($p1,$p2){
    $mediaa = ($p1->preco + $p2->preco) / 2;
    return $mediaa;
}
echo "<strong>", "A média dos produtos", $p1->nome, " e ", $p2->nome, " é de: </strong> R$", mediaPreco($p1, $p2);

?>