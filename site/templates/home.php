<?php snippet('header') ?>

<?php snippet('menu') ?>

<div class="jumbotron video">
  <div class="container-fluid">
      <video muted autoplay>
        <source src="<?php if($video = $page->file('video.mov')) { echo $video->url(); } ?>" type="video/mp4">
      </video>
  </div>
</div>

<div class="container">
  <div class="quote">
    <p><?php echo $page->catch() ?></p>
  </div>
</div><!-- /.container -->

<div class="jumbotron custom-background" style="background-image:url(<?php if($image = $page->image('cover.jpg')) { echo $image->url(); } ?>);">
  <div class="container presentation">
    <div class="row">
      <p>&nbsp;</p>
      <?php echo $page->presentation()->kirbytext() ?>
      <p>&nbsp;</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="competences">
    <div class="row">
      <div class="col-md-2 col-md-offset-1">
        <img src="<?php echo url('assets/images/icons/conseil.svg') ?>" />
        <h3>Conseil</h3>
      </div>
      <div class="col-md-2">
        <img src="<?php echo url('assets/images/icons/conception.svg') ?>" />
        <h3>Conception</h3>
      </div>
      <div class="col-md-2">
        <img src="<?php echo url('assets/images/icons/competences.svg') ?>" class="center-icon" />
      </div>
      <div class="col-md-2">
        <img src="<?php echo url('assets/images/icons/image.svg') ?>" />
        <h3>Technique</h3>
      </div>
      <div class="col-md-2">
        <img src="<?php echo url('assets/images/icons/suivi.svg') ?>" />
        <h3>Suivi</h3>
      </div>
    </div>
    <div class="row">
      <p>Forte d’un large panel de compétences créatives et stratégiques, la team NewTrope saura en tirer le meilleur pour vous offrir un regard innovant et proposer la solution la plus efficace pour le développement de votre entreprise.</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="members">
      <div class="col-md-3 col-xs-6">
        <img src="<?php echo url('assets/images/david.jpg') ?>" />
        <h3>David</h3>
        <p>À la réa</p>
        <p>Après des études en Lettres et en Sociologie ainsi qu’une dizaine d’année de théâtre, David se lance dans la réalisation en solo puis chez <em>Paris Brest</em> et <em>Zadig Production</em>. Il s'achète alors une belle pelle, creuse et pose enfin les fondations de NewTrope pour les besoins d’un court-métrage en 2014.</p>
      </div>
      <div class="col-md-3 col-xs-6">
        <img src="<?php echo url('assets/images/jocelyn.jpg') ?>" />
        <h3>Jocelyn</h3>
        <p>À la technique</p>
        <p>Artiste photographe et passionné de voyages, Jocelyn crapahute la pampa californienne. Il en ramène un reportage photographique qui lui vaudra d’être nommé membre d’honneur de WWOOF France. Suite à sa rencontre avec David et des projets communs, il se forme à la vidéo et devient chef opérateur.</p>
      </div>
      <div class="col-md-3 col-xs-6">
        <img src="<?php echo url('assets/images/luca.jpg') ?>" />
        <h3>Luca</h3>
        <p>À l'image</p>
        <p>Passionné d’informatique et suite à des études scientifiques, Luca se rend compte que la vidéo, c'est bien plus rigolo et s'en retourne à son envie première, l’image. Après un cursus aux Beaux-Arts et plusieurs projets vidéo personnels où il apprend à se servir du matériel cinéma, Luca intègre NewTrope en 2016.</p>
      </div>
      <div class="col-md-3 col-xs-6">
        <img src="<?php echo url('assets/images/jerem.jpg') ?>" />
        <h3>Jeremy</h3>
        <p>À la prod</p>
        <p>De formation théâtrale et littéraire, Jérémy entreprend une carrière commerciale qui le fera voyager à travers le pays, puis l’Angleterre jusqu’à New York. À son retour en France, gastronomiquement rétabli et fort de son expérience dans l’évènementiel et la communication il rejoint l’équipe en 2016.</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="next">
      <p>Interessé ? Voyez la suite !</p>
      <p><a href="<?php echo url('l-agence') ?>" class="button">Suivez le chemin</a></p>
      </p>
    </div>
  </div>
</div>


<?php snippet('footer') ?>
