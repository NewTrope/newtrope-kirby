<?php snippet('header') ?>

  <div class="row">
    <div class="col-md-2">
      <?php snippet('menu') ?>
    </div>
    <div class="col-md-4">
      <article class="pageContent">
        <?php echo $page->text()->kirbytext() ?>
      </article>
    </div>
  </div>


<?php snippet('footer') ?>
