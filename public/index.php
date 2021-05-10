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
$fifa->img = "https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60";

// Game 2:
$fortnite = new Game();
$fortnite->id = 2;
$fortnite->name = "Fortnite";
$fortnite->desc = "Fortnite est un Battle Royal en ligne développé par Epic Games";
$fortnite->releaseYear = "21 juillet 2017";
$fortnite->platform = "PC - PS4 - XBOX";
$fortnite->price = "GRATUIT";
$fortnite->img = "https://images.unsplash.com/photo-1589241062272-c0a000072dfa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60";

// Game 3:
$battlefield5 = new Game();
$battlefield5->id = 3;
$battlefield5->name = "Battlefield 5";
$battlefield5->desc = "Battlefield V est un jeu vidéo de tir à la première personne développé par DICE et édité par Electronic Arts.";
$battlefield5->releaseYear = "4 septembre 2018";
$battlefield5->platform = "PC - PS4 - XBOX";
$battlefield5->price = "14.99€";
$battlefield5->img = "https://images.unsplash.com/photo-1605811784653-ee4e230bd981?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60";

// Game 4:
$rocketLeague = new Game();
$rocketLeague->id = 4;
$rocketLeague->name = "Rocket League";
$rocketLeague->desc = "Rocket League est un jeu vidéo de sport développé et édité par Psyonix.";
$rocketLeague->releaseYear = "7 juillet 2015";
$rocketLeague->platform = "PC - PS4 - XBOX";
$rocketLeague->price = "GRATUIT";
$rocketLeague->img = "https://images.unsplash.com/photo-1572425914445-addf19106140?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60";

// Game 5:
$theForest = new Game();
$theForest->id = 5;
$theForest->name = "The Forest";
$theForest->desc = "The Forest est un jeu vidéo de survie développé et édité par Endnight Games. Le jeu se déroule sur une péninsule isolée et boisée";
$theForest->releaseYear = "30 mai 2014";
$theForest->platform = "PC - PS4 - XBOX";
$theForest->price = "19.99€";
$theForest->img = "https://images.unsplash.com/photo-1554129351-dd3625ed5f30?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60";

// Game 6:
$ghostOfTsushima = new Game();
$ghostOfTsushima->id = 6;
$ghostOfTsushima->name = "Ghost of Tsushima";
$ghostOfTsushima->desc = "Le jeu se passe au Japon, en 1274 et s'inspire de l'Histoire de cette époque, sans pour autant chercher à la retranscrire fidèlement.";
$ghostOfTsushima->releaseYear = "17 juillet 2020";
$ghostOfTsushima->platform = "PC - PS4 - XBOX";
$ghostOfTsushima->price = "49.99€";
$ghostOfTsushima->img = "https://images.unsplash.com/photo-1600924779117-927b4f81457d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=60";

// Other objects créations
$items = array($fifa, $fortnite, $battlefield5, $rocketLeague, $theForest, $ghostOfTsushima);
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
            <img src="https://images.unsplash.com/photo-1586891042194-248a5e10b422?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Assassin Creed Valhalla</h5>
              <p class="card-text">Assassin's Creed Valhalla est un jeu vidéo d'action-aventure et de rôle</p>
              <p class="display-5">69.99€</p>
              <a href="" class="btn btn-outline-secondary btn-sm">Lire plus</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1616595364501-01c9eb5f4366?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">The last of Us partie 2</h5>
              <p class="card-text">The Last of Us Part II est un jeu vidéo d’action-aventure en vue à la troisième personne, de type survival horror et se déroulant dans un monde post-apocalyptique.</p>
              <p class="display-5">29.99€</p>
              <a href="" class="btn btn-outline-secondary btn-sm">Lire plus</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1469032923574-4f1413034019?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">GTA 5</h5>
              <p class="card-text">Grand Theft Auto V est un jeu vidéo d'action-aventure, développé par Rockstar North et édité par Rockstar Games.</p>
              <p class="display-5">29.99€</p>
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
                <p class="display-5"><?= $oneItem->price ?></p>
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