<!-- carousel -->
<div class="carousel">
    <div class="list">
        <?php foreach ($beers as $beer):?>
            <div class="item">
                <img src="public/images/<?=$beer['chemin_image']?>.png" alt="#">
                <div class="intro">
                    <div class="title">
                        Bière
                    </div>
                    <div class="topic">
                        <?=$beer['nom']?>
                    </div>
                    <div class="des">
                        <?=$beer['description']?>
                    </div>
                    <button onclick="gotoLink(this)" value="<?=$beer['nomPage']?>.php" class="seeMore">
                        Voir plus &#8599
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
</div>
<div class="arrows">
    <button id="prev"><</button>
    <button id="next">></button>
</div>
<script src="public/js/app.js"></script>