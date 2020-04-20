<?php

namespace MyApp\Component\Multiply;
use MyApp\Component\AddResquest\AddResquest;

class Multiply
{

    public function execute(AddResquest $request): int
    {
        return  $request->v1 * $request->v2;

    }
    
}