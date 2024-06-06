<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=KoHo' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:regular' rel='stylesheet'>
    <title><?= $title ?></title>
    <?php if (!empty($css) && !empty($css_hf)) :?>
        <link rel="stylesheet" href=<?= $css ?>>
        <link rel="stylesheet" href=<?= $css_hf ?>>
    <?php endif ?>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="accueil.php">ECLIPSE</a></li>
                <li><a href="apogee.php">Nos bières</a></li>
                <li><a href="equipe.php">Qui sommes nous ?</a></li>
                <li><a href="commandes.php">Commandes</a></li>
                <li><a href="vulgarisation.php">Vulgarisation</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>

