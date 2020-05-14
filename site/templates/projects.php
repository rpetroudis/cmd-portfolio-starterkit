<?php snippet('header') ?>

<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/assets/css/costum1.css" type="text/css">

<main>
  <?php snippet('intro') ?>
  <div class="row" <?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed()->paginate(9) as $project): ?>
      <div class="col-12 col-lg-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="<?= $project->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail"/>
          </div>
          <div class="card-body">
            <h4 class="card-title"><a class='title' href="<?= $project->url() ?>"><?= $project->title() ?></a></h4>
            <p class="card-text"><?= $project->roles() ?> </p>
            <a class= "read" href="<?= $project->url() ?>"> &#8594;</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</main>
<?php snippet('pagination') ?>
<?php snippet('footer') ?>     