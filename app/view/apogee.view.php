<div class="fiche">

    <div class="container-img"><img src="public/images/Apogee_bouteilleuh.png" /></div>

    <div class="text">
        <h3 class="titre">Apogée</h3>
        <p>Bière rousse aux doux parfum de cannelle, vous plongeant au milieux des étoiles et des nébuleuses, un instant
            d'éternité a partager entre proches ✨️ </p>
        <div class="stock">
            En stock: <?= $beerStock[0]['stock'] ?>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="bouton-acheter">
                <button type="submit" id="ajouter-panier">Ajouter au panier</button>
            </div>
        </form>
    </div>
</div>
<div class="fleche">
    <a class="flecheG" href="voile_tendre.php"><img src="public/images/fleche_g.png"></a>
    <a class="flecheD" href="aube_eclipse.php"><img src="public/images/fleche_d.png"></a>
</div>
</main>