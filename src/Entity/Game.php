<?php

namespace Entity;

use Entity\User;
use ludk\Utils\Serializer;

class Game
{
    public $id;
    public $name;
    public $desc;
    public $releaseYear;
    public $platform;
    public $img;
    public $price;
    public User $user;

    use Serializer;
}
