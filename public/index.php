<?php

use Entity\Game;
use Entity\User;

require '../vendor/autoload.php';

// USERS

// USER  1:
$userHomer = new User();
$userHomer->id = 1;
$userHomer->nickname = "Homer";
$userHomer->password = "simpson";

// GAMES

// Game 1:
$fifa = new Game();
$fifa->id = 1;
$fifa->name = "FIFA 2021";
$fifa->desc = "FIFA 21 est un jeu vidéo de football développé par EA Canada";
$fifa->releaseYear = "5 octobre 2020";
$fifa->platform = "PC - PS4 - XBOX";
$fifa->price = "69.99€";
$fifa->img = "https://image.api.playstation.com/vulcan/img/rnd/202101/1315/1zfTY2JW41HdDTGJC00Go4nk.png";

// Game 2:
$fortnite = new Game();
$fortnite->id = 2;
$fortnite->name = "Fortnite";
$fortnite->desc = "Fortnite est un Battle Royal en ligne développé par Epic Games";
$fortnite->releaseYear = "21 juillet 2017";
$fortnite->platform = "PC - PS4 - XBOX";
$fortnite->price = "GRATUIT";
$fortnite->img = "https://cdn2.unrealengine.com/battle-pass-chapter-2-season-6-1920x1080-dc8eb73dc494.jpg";

// Game 3:
$battlefield5 = new Game();
$battlefield5->id = 3;
$battlefield5->name = "Battlefield 5";
$battlefield5->desc = "Battlefield V est un jeu vidéo de tir à la première personne développé par DICE et édité par Electronic Arts.";
$battlefield5->releaseYear = "4 septembre 2018";
$battlefield5->platform = "PC - PS4 - XBOX";
$battlefield5->price = "14.99€";
$battlefield5->img = "https://image.api.playstation.com/vulcan/ap/rnd/202010/0813/TGIIghw30d2pJUuZDdKkni6O.png";

// Other objects créations
$items = array($fifa, $fortnite, $battlefield5);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Game'Lib</title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bibliothèque</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Rechercher un jeu" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">GO</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- FIN NAVBAR -->

  <!-- HEADER -->
  <div style="background: url(img/header_gaming.jpeg); height: 400px;" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
      <h1 class="display-4 font-weight-bold mb-3">Game'Lib</h1>
      <p class="font-italic mb-3"></p>
      <p class="font-italic mt-4">Découvrez tous les derniers jeux 2021</p>
      <a href="#" role="button" class="btn btn-primary px-5">Accéder à la bibliothèque</a>
    </div>
  </div>

  <!-- SECTION CARDS -->
  <section id="gallery" class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Assassin Creed Valhalla</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
              <a href="" class="btn btn-outline-secondary btn-sm">Lire plus</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">The last of Us partie 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
              <a href="" class="btn btn-outline-secondary btn-sm">Lire plus</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">GTA 5</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
              <a href="" class="btn btn-outline-secondary btn-sm">Lire plus</a>
            </div>
          </div>
        </div>

        <?php
        foreach ($items as $oneItem) {
        ?>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <img src="<?= $oneItem->img ?>" alt="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?= $oneItem->name ?></h5>
                <p class="card-text"><?= $oneItem->desc ?></p>
                <a href="" class="btn btn-outline-secondary btn-sm">Lire plus</a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

      </div>
    </div>
  </section>
  <!-- FIN SECTION CARDS -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>