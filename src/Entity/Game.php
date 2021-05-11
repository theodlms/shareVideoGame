<?php

namespace Entity;

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

    use Serializer;
}
