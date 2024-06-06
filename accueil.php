<?php
include 'app/model/accueil.model.php';
include 'app/model/connexionBDD.php';

$pdo = getDatabaseConnexion();
$beers = getBeerImages($pdo);
$beerStock = getBeerStock($pdo);

$title = 'Accueil';
$css = 'public/css/style.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';