<?php

namespace Backendbox\Handler;

class Handler
{
    public $string;
    public $type;

    public function __construct($string = null, $type = "fb")
    {
        $this->string = $string;
        $this->type = $type;
    }

    public static function world()
    {
        echo $this->string;
        echo $this->type;
    }
}