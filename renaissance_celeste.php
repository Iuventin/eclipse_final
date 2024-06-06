<?php
include 'app/model/accueil.model.php';
include 'app/model/connexionBDD.php';

$pdo = getDatabaseConnexion();
$beers = getBeerImages($pdo);
$beerStock = getBeerStock($pdo);

$title = 'Biere Renaissance Céléste';
$css = 'public/css/renaissance_celeste.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/renaissance_celeste.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';