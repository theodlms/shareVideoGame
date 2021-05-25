<?php

use Entity\Game;
use Entity\User;
use ludk\Persistence\ORM;
use Controller\AuthController;
use Controller\HomeController;
use Controller\ContentController;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$orm = new ORM(__DIR__ . '/../Resources');

$manager = $orm->getManager();

$gameRepo = $orm->getRepository(Game::class);
$userRepo = $orm->getRepository(User::class);

$action = $_GET["action"] ?? "display";
switch ($action) {
  case 'register':
    $controller = new AuthController();
    $controller->register();
    break;
  case 'logout':
    $controller = new AuthController();
    $controller->logout();
    break;
  case 'login':
    $controller = new AuthController();
    $controller->login();
    break;
  case 'new':
    $controller = new ContentController();
    $controller->create();
    break;
  case 'display':
  default:
    $controller = new HomeController();
    $controller->display();
    break;
} ?>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>