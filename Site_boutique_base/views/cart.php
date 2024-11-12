<?php include 'C:\wamp64\www\Site_boutique_base\inc\header.php';?>

<?php


    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    echo "<h2>Votre panier</h2>";

    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {

            echo "<p>Produit : " . htmlspecialchars($product['name']) . "<br>Quantité : " . htmlspecialchars($product['quantity']) . "<br>Prix unitaire : " . htmlspecialchars($product['price']) . " €</p>";

        }
 var_dump($product);
    } else {
        echo "<h3>Votre panier est vide.</h3>";
    }
?>

<a href="<?php echo $baseUri; ?>/checkout">Valider la commande</a>




<?php include 'C:\wamp64\www\Site_boutique_base\inc\footer.php';?>