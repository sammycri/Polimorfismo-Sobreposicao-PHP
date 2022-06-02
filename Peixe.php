<?php
require_once 'Animal.php';
class Peixe extends Animal
{
    
    
    private $corEscama;
    
    //metodos
    
    
    public function alimentar() 
    {
        echo "<p>Comendo minhoca</p>";
    }

    public function emitirSom() 
    {
        echo "<p>Blob blob!</p>";
    }

    public function locomover() 
    {
        echo "<p>Nadando </p>";
    }

    //Metodos especiais
    
    public function getCorEscama() 
    {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void 
    {
        $this->corEscama = $corEscama;
    }


}
