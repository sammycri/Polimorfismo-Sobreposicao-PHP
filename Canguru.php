<?php
require_once 'Mamifero.php';
class Canguru extends Mamifero
{
    //metodos 
    
    public function usarBolsa()
    {
        echo "Guardando filhote na bolsa";
    }
    
    public function locomover() 
    {
        echo "</br><p>Saltando..</p>";
    }
}
