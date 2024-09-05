<?php

// importo la classe.
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Kennels.php';
require_once __DIR__ . '/Model/Toys.php';
require_once __DIR__ . '/data/db.php';


?>


<!DOCTYPE html>
<html lang="en">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.css' integrity='sha512-hhSu9overYjKfSjPCtJW3688VHkfBh+W1pR5Mysll91bOJwGjYntytGTtVXb2aisFOaYXXDrO38NKXDRPJWu7A==' crossorigin='anonymous' />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio di prodotti per animali</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-auto">
                <h2>Prodotti per Cani</h2>
                <div class="row">
                    <?php
                    // Visualizza i prodotti per cani
                    foreach ($products as $product) {
                        if ($product->category === 'Dog') {
                            echo '<div class="col-lg-3 col-md-4 col-sm-6 mb-4">';
                            echo '<div class="card">';
                            echo '<div class="card-body">';
                            echo '<h3 class="card-title">' . $product->name . '</h3>';
                            echo '<p class="card-text">Tipo: ' . get_class($product) . '</p>';
                            echo '<h5 class="card-text"> € ' . $product->price . '</h5>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-auto">
                <h2>Prodotti per Gatti</h2>
                <div class="row">
                    <?php
                    // Visualizza i prodotti per gatti
                    foreach ($products as $product) {
                        if ($product->category === 'Cat') {
                            echo '<div class="col-lg-3 col-md-4 col-sm-6 mb-4">';
                            echo '<div class="card">';
                            echo '<div class="card-body">';
                            echo '<h3 class="card-title">' . $product->name . '</h3>';
                            echo '<p class="card-text">Tipo: ' . get_class($product) . '</p>';
                            echo '<h5 class="card-text"> € ' . $product->price . '</h5>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>