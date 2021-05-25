<?php

namespace Controller;

class HomeController
{
    public function display()
    {
        global $gameRepo;

        $items = array();

        if (isset($_GET['search'])) {
            $items = $gameRepo->findBy(array("name" => '%' . $_GET['search'] . '%'));
        } else {
            $items = $gameRepo->findAll();
        }

        include "../templates/display.php";
    }
}
