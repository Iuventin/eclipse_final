<?php
include 'app/model/accueil.model.php';
include 'app/model/connexionBDD.php';

$pdo = getDatabaseConnexion();
$beers = getBeerImages($pdo);
$beerStock = getBeerStock($pdo);

$title = 'Biere Coeur de l\'ombre';
$css = 'public/css/coeur_de_lombre.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/coeur_de_lombre.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';