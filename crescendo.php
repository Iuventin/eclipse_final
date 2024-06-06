<?php
include 'app/model/accueil.model.php';
include 'app/model/connexionBDD.php';

$pdo = getDatabaseConnexion();
$beers = getBeerImages($pdo);
$beerStock = getBeerStock($pdo);

$title = 'Biere Crescendo';
$css = 'public/css/crescendo.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/crescendo.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';