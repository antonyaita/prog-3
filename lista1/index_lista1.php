<?php
class produto{
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirInformações(){
        echo "<strong> Nome </strong> : $this->nome, ";
        echo "<strong> Preço </strong>: $this->preco, ";
        echo "<strong> Quantidade </strong>: $this->quantidade <br>";
    }

    
}

$p2 = new produto();
$p2 -> nome =" Caneta ";
$p2 -> preco = 2.5;
$p2 -> quantidade = 10 ;

$p2 -> exibirInformações();


$p1 = new produto();
$p1 -> nome = " borracha ";
$p1 -> preco = 1.5;
$p1 -> quantidade = 5;

$p1 -> exibirInformações();


function mediaPreco($p1,$p2){
    $mediaa = ($p1->preco + $p2->preco) / 2;
    return $mediaa;
}
echo "<strong>", "A média dos produtos", $p1->nome, " e ", $p2->nome, " é de: </strong> R$", mediaPreco($p1, $p2);

?>