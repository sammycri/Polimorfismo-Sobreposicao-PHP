<?php
require_once 'Animal.php';
class Reptil extends Animal
{
    
    private $corEscama;
    
    //metodos
    
    public function alimentar() 
    {
        echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom() 
    {
        echo "<p>Som de Réptil</p>";
    }

    public function locomover() 
    {
        echo "<p> Rastejando </p>";
    }
    
    //metodos especiais
    
    public function getCorEscama() 
    {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void 
    {
        $this->corEscama = $corEscama;
    }


}
