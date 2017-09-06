<?php

namespace Backendbox\Handler;

class Handler
{
    public $PROPERTY;

    public function __construct($PROPERTY)
    {
        $this->PROPERTY = $PROPERTY;
    }

    public static function world()
    {
        echo  'Hello World, Composers!';
    }
}