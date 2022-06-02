<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'Mamifero.php';  
           require_once 'Reptil.php';  
           require_once 'Ave.php';  
           require_once 'Peixe.php';  
           
           $m = new Mamifero();
           $m->setPeso(33.5);
           $m->locomover();
           
           $r = new Reptil();           
           $r->locomover(); 
                        
           $a = new Ave();          
           $a->locomover();
           
           $p = new Peixe();
           $p->locomover();
           
           
           
           
           
           
               
       
        ?>
        </pre>
    </body>
</html>
