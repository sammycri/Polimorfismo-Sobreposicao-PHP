<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero
{
   //metodos
    public function enterrarOsso()
    {
        echo "Enterrando osso..";
    }
    
    public function abanarRabo()
    {
        echo "Abanando o rabinho...";
    } 
    
    public function emitirSom() 
    {
        echo "<br><p>Au au (latindo)</p>";
    }
}
