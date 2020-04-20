<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController
{

    public function addAction($param1, $param2)
    {
        $calculator = new Calculator();
        return new Response((int)$calculator->add($param1, (int)$param2));
    }

    public function multiplyAction(Request $request)
    {
        $calculator = new Calculator();
        return new Response((int)$calculator->multiply($request->request->get('param1'), (int)$request->request->get('param2')));
    }

    public function divideAction($param1, Request $request)
    {
        $calculator = new Calculator();
        return new Response((int)$calculator->substract($param1, (int)$request->request->get('param2')));
    }

    public function substractAction(Request $request)
    {
        $calculator = new Calculator();
        return new Response((int)$calculator->divide($request->request->get('param1'), (int)$request->request->get('param2')));
    }

}