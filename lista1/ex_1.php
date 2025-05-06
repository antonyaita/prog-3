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




?>