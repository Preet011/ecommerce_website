
<?php include 'C:\wamp64\www\Site_boutique_base\inc\header.php';?>


<div class="product-detail">

        <h2><?php echo htmlspecialchars($product[0]['name']);?></h2>
        <p><?php echo htmlspecialchars($product[0]['description']);?> </p>
        <p><?php echo htmlspecialchars($product[0]['price']);?> €</p>
        <img src="<?php  echo $baseUri . "/public/img/" . htmlspecialchars($product[0]['image']);?>" alt="<?php echo htmlspecialchars($product[0]['name']);?>">

        <a href="<?php echo $baseUri; ?>/cart/add?id=<?php echo htmlspecialchars($product[0]['id']); ?>">Ajouter au panier</a>

</div>

<?php include 'C:\wamp64\www\Site_boutique_base\inc\footer.php'; ?>