<?php
$contact = [
    'nom' => 'IUT Sénart-Fontainebleau',
    'bâtiment' => 'Bâtiment H',
    'adresse' => '240 rue de la Motte',
    'code_postal' => '77550',
    'ville' => 'Moissy-Cramayel',
];

$title = 'Contact';
$css = 'public/css/contact.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/contact.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';