<?php
// Classe base per rappresentare i prodotti
class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        // Verifica che il nome sia di almeno 3 caratteri
        if (strlen($name) < 3) {
            throw new Exception("Il nome del prodotto deve essere di almeno 3 caratteri.");
        }
        $this->name = $name;
        $this->price = number_format($price, 2, ',', '.');
    }
}
