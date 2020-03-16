<?php

namespace MyApp\Component\Calculator;
use Symfony\Component\HttpFoundation\Request;

class Calculator
{

    public function add(Request $request): int
    {
        return $request->query->post('var1'); - $request->query->post('var2');
    }

    public function substract(int $v1,Request $request): int
    {
        return $v1 - $request->query->get('var');
    }

    public function multiply(Request $request): int
    {
        return $request->query->get('var1') * $request->query->get('var2');

    }

    public function divide(int $v1, int $v2): int
    {
        return $v1 + $v2;
    }
}