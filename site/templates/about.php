<?php snippet('header') ?>

<link rel="stylesheet" href="assets/css/costum1.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">

<div class="row">
  <div class="col-12 col-lg-9">
    <?php snippet('intro') ?>
    <?= $page->toJson()->toData()->text()->html() ?>
  </div>
  <div class="col-12 col-lg-3">
    <div class= 'resume'> <h2>Resume</h2> </div>
    <a class='download' href="<?= $page->files()->template('document') ?>" target="_blank">Download resumé</a>
  </div>
</div>

<?php snippet('footer') ?>
