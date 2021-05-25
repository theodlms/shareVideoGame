<?php

use Entity\Game;
use Entity\User;
use ludk\Persistence\ORM;
use Controller\HomeController;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$orm = new ORM(__DIR__ . '/../Resources');

$manager = $orm->getManager();

$gameRepo = $orm->getRepository(Game::class);
$userRepo = $orm->getRepository(User::class);

$action = $_GET["action"] ?? "display";
switch ($action) {
  case 'register':
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordRetype'])) {
      $errorMsg = NULL;
      $criteriaWithlogin = [
        "nickname" => $_POST['username']
      ];
      $usersWithThisNickname = $userRepo->findBy($criteriaWithlogin);
      if (count($usersWithThisNickname) > 0) {
        $errorMsg = "Nickname already used.";
      } else if ($_POST['password'] != $_POST['passwordRetype']) {
        $errorMsg = "Passwords are not the same.";
      } else if (strlen(trim($_POST['password'])) < 8) {
        $errorMsg = "Your password should have at least 8 characters.";
      } else if (strlen(trim($_POST['username'])) < 4) {
        $errorMsg = "Your nickame should have at least 4 characters.";
      }
      if ($errorMsg) {
        include "../templates/RegisterForm.php";
      } else {
        $newUser = new User();
        $newUser->nickname = $_POST['username'];
        $newUser->password = $_POST['password'];
        $manager->persist($newUser);
        $manager->flush();
        $_SESSION['user'] = $newUser;
        header('Location: ?action=display');
      }
    } else {
      include "../templates/RegisterForm.php";
    }
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
      include "../templates/loginForm.php";
    }
    break;
  case 'new':
    if (
      isset($_SESSION['user'])
      && isset($_POST['name'])
      && isset($_POST['desc'])
      && isset($_POST['content'])
      && isset($_POST['languageId'])
    ) {
      $errorMsg = NULL;
      if (strlen(trim($_POST['name'])) < 2) {
        $errorMsg = "Your title should have at least 2 characters.";
      } else if (strlen(trim($_POST['desc'])) < 2) {
        $errorMsg = "Your desc should have at least 2 characters.";
      } else if (strlen(trim($_POST['platform'])) == 0) {
        $errorMsg = "Your content shouldn't be empty.";
      } else if (intval($_POST['price']) == 0) {
        $errorMsg = "You should choose a price.";
      }
      if ($errorMsg) {
        include "../templates/createForm.php";
      } else {
        $language = $langRepo->find($_POST['languageId']);
        $newGame = new Game();
        $newGame->name = trim($_POST['name']);
        $newGame->desc = trim($_POST['desc']);
        $newGame->platform = trim($_POST['platform']);
        $newGame->price = trim($_POST['price']);
        $newGame->user = $_SESSION['user'];
        $manager->persist($newCode);
        $manager->flush();
        header('Location: ?action=display');
      }
    } else {
      include "../templates/CreateForm.php";
    }
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