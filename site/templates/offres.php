<?php snippet('header') ?>

<?php snippet('menu') ?>

<div class="jumbotron custom-background-fadein" style="background-image:url(<?php if($image = $page->image('cover.jpg')) { echo $image->url(); } ?>);">
  <div class="container">
    <div class="row">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p> <!-- fondre l'image dans le background avec légère superposition du texte -->
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <article>
        <h3>Vous êtes fou ? Nous aussi !</h3>
        <p>Un clip, une pub ? Une vidéo corporate ? Angelina, Brad ou Schwarzy, des plans en hélicoptère avec des robots géants à la Michael Bay ? Quels que soient vos besoins, laissez vous aller, nous sommes là pour ça.</p>
        <p>Une idée, un projet ? Parlez nous de vous et de vos envies, notre équipe vous écoute et vous conseille.<br/>Par téléphone, mail ou autour d'un café, nous sommes là pour vous.</p>
      </article>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="next">
      <p><a href="#" class="button">Contactez nous</a></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h3>&nbsp;</h3>
      <article>
        <p>Vous souhaitez simplement vous lancer ? Développer un nouveau produit ? Nous avons ce qu'il vous faut.<br/>Pour vous faire une idée, voici quelques formules type. À vous de fixer les limites.</p>
      </article>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-3 col-xs-6 offres">
      <div class="titre-offre" style="background-color:rgb(57, 80, 182);">
        <h3>L'express</h3>
        <p>Pas cher, rapide et efficace !</p>
      </div>
      <img src="<?php if($image = $page->image('1.jpg')) { echo $image->url(); } ?>" class="img-responsive" />
      <div class="texte">
        <p>&nbsp;</p>
        <p>Un clip, une pub ? Une vidéo corporate ? Angelina, Brad ou Schwarzy, des plans en hélicoptère avec des robots géants à la Michael Bay ? Quels que soient vos besoins, laissez vous aller, nous sommes là pour ça.</p>
        <p>&nbsp;</p>
      </div>
    </div>
    <div class="col-md-3 col-xs-6 offres">
      <div class="titre-offre" style="background-color:rgb(51, 143, 44);">
        <h3>Le starter</h3>
        <p>Pour bien commencer</p>
      </div>
      <img src="<?php if($image = $page->image('2.jpg')) { echo $image->url(); } ?>" class="img-responsive" />
      <div class="texte">
        <p>&nbsp;</p>
        <p>Un clip, une pub ? Une vidéo corporate ? Angelina, Brad ou Schwarzy, des plans en hélicoptère avec des robots géants à la Michael Bay ? Quels que soient vos besoins, laissez vous aller, nous sommes là pour ça.</p>
        <p>&nbsp;</p>
      </div>
    </div>
    <div class="col-md-3 col-xs-6 offres">
      <div class="titre-offre" style="background-color:rgb(112, 57, 182);">
        <h3>Le NewTrope</h3>
        <p>On s'occupe de tout et ça va faire mal</p>
      </div>
      <img src="<?php if($image = $page->image('3.jpg')) { echo $image->url(); } ?>" class="img-responsive" />
      <div class="texte">
        <p>&nbsp;</p>
        <p>Un clip, une pub ? Une vidéo corporate ? Angelina, Brad ou Schwarzy, des plans en hélicoptère avec des robots géants à la Michael Bay ? Quels que soient vos besoins, laissez vous aller, nous sommes là pour ça.</p>
        <p>&nbsp;</p>
      </div>
    </div>
    <div class="col-md-3 col-xs-6 offres">
      <div class="titre-offre"  style="background-color:rgb(138, 48, 45);">
        <h3>L'Armageddon</h3>
        <p>L'arme fatale de la com' vidéo</p>
      </div>
      <img src="<?php if($image = $page->image('4.jpg')) { echo $image->url(); } ?>" class="img-responsive" />
      <div class="texte">
        <p>&nbsp;</p>
        <p>Un clip, une pub ? Une vidéo corporate ? Angelina, Brad ou Schwarzy, des plans en hélicoptère avec des robots géants à la Michael Bay ? Quels que soient vos besoins, laissez vous aller, nous sommes là pour ça.</p>
        <p>&nbsp;</p>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
