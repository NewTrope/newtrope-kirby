<?php snippet('header') ?>

  <div class="row">
    <div class="col-md-2">
      <?php snippet('menu') ?>
    </div>
    <div class="col-md-7">
      <article class="portfolioContent">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <figure>
            <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive">
          </figure>
        <?php endforeach ?>
      </article>
    </div>
    <div class="col-md-3">
      <article class="portfolioInfos">
        <p class="projectTitle"><?php echo $page->title() ?></p>
        <p class="projectYear"><?php echo $page->year() ?></p>
        <div class="projectText"><?php echo $page->text()->kirbytext() ?></div>
        <p class="projectTags"><?php echo $page->tags() ?></p>
      </article>
    </div>
  </div>


<?php snippet('footer') ?>
