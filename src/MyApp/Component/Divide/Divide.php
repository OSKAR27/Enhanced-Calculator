<?php

namespace MyApp\Component\Divide;
use MyApp\Component\AddResquest\AddResquest;

class Divide
{
    public function execute(AddResquest $request): int
    {
        return  $request->v1 / $request->v2;
    }
}