<?php
// include_once __DIR__ . '../Model/Product.php';
// include_once __DIR__ . '../Model/Category.php';
// include_once __DIR__ . '../Model/Food.php';
// include_once __DIR__ . '../Model/Kennels.php';
// include_once __DIR__ . '../Model/Toys.php';

$products = [];

try {
    // Prodotti per cani
    $products = [
        new Food('Dog Food Premium', 25.99, 'Dog'),
        new Kennels('Luxury Dog Kennel', 200.00, 'Dog'),
        new Toys('Chew Toy', 15.50, 'Dog'),
        new Food('Organic Dog Food', 30.99, 'Dog'),
        new Kennels('Portable Dog Kennel', 180.00, 'Dog'),
        new Toys('Squeaky Toy', 12.50, 'Dog'),
        new Food('Grain-Free Dog Food', 28.99, 'Dog'),
        new Kennels('Wooden Dog Kennel', 220.00, 'Dog'),
        new Toys('Rope Toy', 10.00, 'Dog'),
        new Food('Puppy Food', 20.99, 'Dog'),
        new Kennels('Plastic Dog Kennel', 150.00, 'Dog'),
        new Toys('Ball Toy', 8.50, 'Dog'),

        // Prodotti per gatti
        new Food('Cat Food Premium', 22.99, 'Cat'),
        new Kennels('Luxury Cat Kennel', 190.00, 'Cat'),
        new Toys('Feather Toy', 9.50, 'Cat'),
        new Food('Organic Cat Food', 27.99, 'Cat'),
        new Kennels('Portable Cat Kennel', 170.00, 'Cat'),
        new Toys('Mouse Toy', 7.50, 'Cat'),
        new Food('Grain-Free Cat Food', 25.99, 'Cat'),
        new Kennels('Wooden Cat Kennel', 210.00, 'Cat'),
        new Toys('Laser Toy', 11.00, 'Cat'),
        new Food('Kitten Food', 18.99, 'Cat'),
        new Kennels('Plastic Cat Kennel', 140.00, 'Cat'),
        new Toys('Scratching Post', 20.50, 'Cat'),
    ];
} catch (Exception $e) {
    // Gestione degli errori
    echo 'Errore: ' . $e->getMessage();
}
