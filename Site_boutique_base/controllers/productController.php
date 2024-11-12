<?php
require_once 'C:\wamp64\www\Site_boutique_base\database\db.php';

function getAllProducts() {
  // requetes sql pour chopper tous les produits
global $pdo;
try {
  $sql = "SELECT * FROM products";
  $stmt = $pdo->query($sql);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
  echo "Erreur lors de la récupération des produits: " . $e->getMessage();
  return null;
}

}

function getProductById($id) {

  global $pdo;

  // select products where id is unknown

  $sql = "SELECT * FROM products WHERE id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$id]);
  // return in format table associative

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function home() {
  // appel de la fonction getAllProducts
  $products = getAllProducts();
  // inclure le fichier index dans le dossier views

  include 'C:\wamp64\www\Site_boutique_base\views\index.php';
}

function viewProduct() {

$id =  $_GET['id'];
// calling function
$product = getProductById($id);

if (!$product) {
  echo "Product non trouvé";
  return;
}

include 'C:\wamp64\www\Site_boutique_base\views\product.php';
}



?>