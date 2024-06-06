<?php
session_start();

$title = 'Equipe';
$css = 'public/css/equipe.css';
$css_hf = 'public/css/head_footer.css';

include 'app/model/connexionBDD.php';
include 'app/model/accueil.model.php';

$pdo = getDatabaseConnexion();
$membres = getMembres($pdo);

ob_start();
include 'app/view/equipe.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>
