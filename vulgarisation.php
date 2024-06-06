<?php

$title = 'Vulgarisation';
$css = 'public/css/vulgarisation.css';
$css_hf = 'public/css/head_footer.css';

ob_start();
include 'app/view/vulgarisation.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';