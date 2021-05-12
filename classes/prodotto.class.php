<?php

class Prodotto 
{

    public $nome;
    public $marca;
    public $prezzo;
    public $sconto;
    public $descrizione;

    public function __construct($_nome, $_prezzo, $_marca, $_descrizione)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;
        $this->marca = $_marca;

    }

    
}