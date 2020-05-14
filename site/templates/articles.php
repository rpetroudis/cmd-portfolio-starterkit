<?php snippet('header') ?>
<?php snippet('menu') ?>

<link rel="stylesheet" href="/assets/css/costum1.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

<section class="content blog">

<header class="intro new">
  <h1><?= $page->title() ?></h1>
</header>

  <div class="row" <?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed()->paginate(9) as $article): ?>
      <div class="col-12 col-lg-4">
        <div class="card card-cascade narrower card1">
          <div class="view view-cascade overlay">
            <img src="<?= $article->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" /> 
          </div>
          <div class="card-body">
          <h4 class="card-title"><a class="artic" href="<?= $article->url() ?>"><?= $article->title() ?></a></h4>
          <p class="card-text"><?= $article->roles() ?> </p>
          <a class="continue" href="<?= $article->url() ?>">Read more &#8594;</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>

</section>

<?php snippet('pagination') ?>
<?php snippet('footer') ?>

