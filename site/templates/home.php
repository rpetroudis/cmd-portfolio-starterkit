<?php snippet('header') ?>

<main>

  <div class="back">
  <div class="row align-items-center">
    <div class="col-12 col-lg-6">
    <img src="/media/img/NEW LOGO-161.png" width="75px" height="75px" alt="<?= $site->image()->alt() ?>" class="square"/>
      <h1><?= $page->introductiontitle() ?></h1>
      <p class="lead"><?= $page->introductiontext() ?></p>
      <a href="<?= $site->page('projects') ?>" class="btn btn-primary" role="button" aria-pressed="true">View my work</a>
      <a href="<?= $site->page('about') ?>" class="btn btn-outline-primary" role="button" aria-pressed="true">About me</a>
    </div>

  </div>
</div>
</main>

<?php snippet('footer') ?>