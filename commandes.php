<?php
session_start();
include 'app/model/accueil.model.php';
require_once ('app/model/connexionBDD.php');
$pdo = getDatabaseConnexion();

$panier = isset($_COOKIE["panier"]) ? json_decode($_COOKIE["panier"], true) : [];

if (!is_array($panier)) {
    $panier = [];
}

$ids = array_keys($panier);

$panierQuery = getArticles($pdo, $ids);
$total = getPanierTotal($panier, $panierQuery);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    handleOrder($pdo);
    
}


$title = 'Commandes';
$css = 'public/css/commandes.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/commandes.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';