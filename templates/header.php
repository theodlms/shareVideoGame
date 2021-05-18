<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareCode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles/dracula.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class=" container">
            <a class="navbar-brand" href="/">ShareGames</a>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                Bienvenue&nbsp;<b><?= $_SESSION['user']->nickname  ?> !</b>
            <?php
            }
            ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">

                </ul>
                <form action="/">
                    <input type="text" name="search" placeholder="Search">
                </form>
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <a href="?action=logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="logout-btn" style="margin-left:30px;">Se déconnecter</a>
                <?php
                } else {
                ?>
                    <a href="?action=login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="login-btn" style="margin-left:30px;">Se connecter</a>
                    <a href="?action=register" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" id="signup-btn" style="margin-left:30px;" git>S'inscrire</a>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
    <div class="container">