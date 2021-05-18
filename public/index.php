<?php

use Entity\Game;
use Entity\User;
use ludk\Persistence\ORM;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$orm = new ORM(__DIR__ . '/../Resources');

$manager = $orm->getManager();

$gameRepo = $orm->getRepository(Game::class);
$userRepo = $orm->getRepository(User::class);
$items = array();

if (isset($_GET['search'])) {
  $items = $gameRepo->findBy(array("name" => '%' . $_GET['search'] . '%'));
} else {
  $items = $gameRepo->findAll();
}

$action = $_GET["action"] ?? "display";
switch ($action) {
  case 'register':
    break;
  case 'logout':
    if (isset($_SESSION['user'])) {
      unset($_SESSION['user']);
    }
    header('Location: ?action=display');
    break;
  case 'login':
    if (isset($_POST['username']) && isset($_POST['password'])) {
      $criteriaWithloginAndPawword = [
        "nickname" => $_POST['username'],
        "password" => $_POST['password']
      ];
      $usersWithThisNicknameAndPassword = $userRepo->findBy($criteriaWithloginAndPawword);
      if (count($usersWithThisNicknameAndPassword) == 1) {
        $_SESSION['user'] = $usersWithThisNicknameAndPassword[0];
        header('Location: ?action=display');
      } else {
        $errorMsg = "Wrong login and/or password.";
        include "../templates/LoginForm.php";
      }
    } else {
      include "../templates/LoginForm.php";
    }
    break;
  case 'new':
    break;
  case 'display':
  default:
    $codes = [];
    if (isset($_GET["search"])) {
      $strToSearch = $_GET["search"];
      $posOfTheAtCharacter = strpos($strToSearch, "@");

      if ($posOfTheAtCharacter === 0) {
        $userName = substr($strToSearch, 1);
        $users = $userRepo->findBy(array("nickname" => $userName));
        if (count($users) == 1) {
          $games = $gameRepo->findBy(array("user" => $users[0]->id));
        }
      } else {
        $games = $gameRepo->findBy(
          array("desc" => "%$strToSearch%")
        );
      }
    } else {
      $games = $gameRepo->findAll();
    }
    include "../templates/display.php";
    break;
} ?>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>