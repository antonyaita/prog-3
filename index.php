<?php 
// Crie uma classe chamada Livro com os seguintes atributos privados:
// título (string)
// autor (string)
// ano de publicação (int)
// disponível (boolean)

class livro{
    private $titulo;
    private $autor;
    private $ano_publicado;
    private $disponibilidade;

    //metodos get e set
    public function getTitulo(): string{
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void{
        $this->titulo = $titulo;
    }


    public function getAutor(): string{
        return $this->autor;
    }

    public function setAutor(string $autor): void{
        $this->autor = $autor;
    }


    public function getAno_publicado(): int{
        return $this->ano_publicado;
    }

    public function setAno_publicado(int $ano_publicado): void{
        $this->autor = $ano_publicado;
    }


    public function isDisponibilidade(): bool{
        return $this->disponibilidade;
    }

    public function setDisponibilidade(bool $disponibilidade): void{
        $this->autor = $disponibilidade;
    }


    //Metodo de exibição
    public function exibirinformacoes():void {
        echo "Titulo: " . $this->getTitulo() . "\n";
        echo "Autor: " . $this->getAutor() . "\n";
        echo "Ano Pubicado: " . $this->getAno_publicado() . "\n";
        echo "Disponivel: " . ($this->isDisponibilidade() ? "Sim" : "Não") . "\n";
    }



}



?>