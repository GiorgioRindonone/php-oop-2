<?php

include_once __DIR__ . '/classes/prodotto.class.php';

$prodotto_1 = new Prodotto ("Iphone 12", 599, "Apple", "Apple iPhone 12 è uno degli smartphone iOS più avanzati e completi che ci siano in circolazione. Dispone di un grande display da 6.1 pollici con una risoluzione di 2532x1170 pixel.");
var_dump($prodotto_1);

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/0ae8af7e4e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
    <title>OOP</title>
  </head>
    <body>


    <h2><?php echo prodotto_1->nome?></h2>

    </body>
</html>
