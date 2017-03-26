<?php

class Pessoa 
{
    public $nome;
    public $idade;
    
    public function correr($km)
    {
        echo $this->nome." está correndo";
        
        for($i = 0; $km > $i; $i++)
        {
            echo ".";
        }
        
        echo $this->nome." correu ".$km."km";
    }         
}

