<?php

namespace MyApp\Component\AddResquest;

class AddResquest{

    public $v1;
    public $v2;

    public function __construct(int $v1, int $v2)
    {
        $this->v1 = $v1;
        $this->v2 = $v2;
    }
}