<?php
include 'app/model/accueil.model.php';
include 'app/model/connexionBDD.php';

$pdo = getDatabaseConnexion();
$beers = getBeerImages($pdo);
$beerStock = getBeerStock($pdo);

$title = 'Biere Aube Eclipsé';
$css = 'public/css/aube_eclipse.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/aube_eclipse.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';