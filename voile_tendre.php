<?php
include 'app/model/accueil.model.php';
include 'app/model/connexionBDD.php';

$pdo = getDatabaseConnexion();
$beers = getBeerImages($pdo);
$beerStock = getBeerStock($pdo);

$title = 'Biere Voile Tendre';
$css = 'public/css/voile_tendre.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/voile_tendre.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';