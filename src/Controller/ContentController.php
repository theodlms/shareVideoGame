<?php

namespace Controller;

use Entity\Game;

class ContentController
{
    public function create()
    {
        global $manager;
        if (
            isset($_SESSION['user'])
            && isset($_POST['name'])
            && isset($_POST['platform'])
            && isset($_POST['price'])
            && isset($_POST['desc'])
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
                $newGame = new Game();
                $newGame->name = trim($_POST['name']);
                $newGame->desc = trim($_POST['desc']);
                $newGame->platform = trim($_POST['platform']);
                $newGame->price = trim($_POST['price']);
                $newGame->user = $_SESSION['user'];
                $manager->persist($newGame);
                $manager->flush();
                header('Location: ?action=display');
            }
        } else {
            include "../templates/createForm.php";
        }
    }
}
