<?php

namespace MyApp\Component\Add;
use MyApp\Component\AddResquest\AddResquest;

class Add
{
    public function execute(AddResquest $request): int
    {
        return  $request->v1 + $request->v2;
    }
}