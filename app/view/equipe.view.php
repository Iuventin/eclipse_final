<div class="contenu">
  <div class="video">
    <h1>Qui est ECLIPSE ?</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/azX8AeZlCfI?si=DX5q0biiGsFFYGzO&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
    <p class="textdescriptif">
      Aussi rare qu’une éclipse, notre bière aux notes de cannelle et aux clous de girofle reflète la chaleur dissimulée par la lune. Une fois que vous y goûtez, vous émergez au milieu des astres, dans une vague de nostalgie et de chaleur. La bière Eclipse vous réunit en famille ou entre amis pour observer ce phénomène extraordinaire depuis n’importe où.
    </p>
  </div>
</div>


<section id="equipe">
  <h1>Notre équipe</h1>


  <?php

  foreach ($membres as $eleve) : ?>

    <div class="carte">
      <div class="infos">
        <p class="prenom"><?= $eleve['prenom'] ?></p>
        <p class='nom'><?= $eleve['nom'] ?></span></p>
      </div>
    </div>
  <?php endforeach ?>

</section>