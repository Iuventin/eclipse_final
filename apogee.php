<?php
include 'app/model/accueil.model.php';
include 'app/model/connexionBDD.php';

$id_biere = 4;

$pdo = getDatabaseConnexion();
$beers = getBeerImages($pdo);
$beerStock = getBeerData($pdo, $id_biere);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    updateCart($id_biere);
}

$title = 'Biere Apogee';
$css = 'public/css/apogee.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/apogee.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';