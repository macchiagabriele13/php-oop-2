<?php

/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:


L'e-commerce vende prodotti per animali.


I prodotti sono categorizzati, le categorie sono Cani o Gatti.


I prodotti saranno oltre al cibo, anche giochi, cucce, etc.


Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). */


require __DIR__ . "/Modals.php/Category.php";
require __DIR__ . "/Modals.php/Product.php";
require __DIR__ . "/Modals.php/Type.php";

$products = [
    $item, $item_due, $item_tre
];


$item = new Product('baubau', 'https://www.monge.it/wp-content/uploads/2022/06/ADULT-TACCHINO-25-319x500.jpg', 20, new Category('Cane'), new Type('Cibo'));
var_dump($item);

$item_due = new Product('baubau', 'https://www.monge.it/wp-content/uploads/2022/06/ADULT-TACCHINO-25-319x500.jpg', 20, new Category('Cane'), new Type('Cibo'));
var_dump($item_due);

$item_tre = new Product('baubau', 'https://www.monge.it/wp-content/uploads/2022/06/ADULT-TACCHINO-25-319x500.jpg', 20, new Category('Cane'), new Type('Cibo'));
var_dump($item_tre);





?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="<?= $product->image ?>" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?= $product->name ?></h4>
                                <p class="card-text"><?= $product->price ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        </div>
    </section>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>