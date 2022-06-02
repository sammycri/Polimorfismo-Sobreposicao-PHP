<?php
require_once 'Reptil.php';
class Cobra extends Reptil
{
    public function alimentar() 
    {
        echo "<br><p>Comendo outros animais</p>";
    }

    public function emitirSom() 
    {
        echo "<br><p>Som de cobra</p>";
    }

    public function locomover() 
    {
        echo "</br><p>Rastejando</p>";
    }
}
