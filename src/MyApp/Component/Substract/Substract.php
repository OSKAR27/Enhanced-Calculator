<?php

namespace MyApp\Component\Substract;
use MyApp\Component\AddResquest\AddResquest;

class Substract
{
    public function execute(AddResquest $request): int
    {
        return  $request->v1 - $request->v2;
    }

}