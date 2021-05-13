<?php

class Smartphones extends Prodotto
{
    public $schedatecnica;

    public function __construct($_nome, $_prezzo, $_marca, $_descrizione, $_codicesconto, $_schedatecnica)
    {
        parent::__construct($_nome, $_prezzo, $_marca, $_descrizione, $_codicesconto);
        $this->schedatecnica = $_schedatecnica;
    }


}