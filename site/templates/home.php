<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <link rel="stylesheet" href="assets/css/costum1.css" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <link rel="icon" href="<?= $site->image()->url() ?>">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

</head>

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

/* ban wak si e koi koño aki ta tra */

<?php snippet('footer') ?>