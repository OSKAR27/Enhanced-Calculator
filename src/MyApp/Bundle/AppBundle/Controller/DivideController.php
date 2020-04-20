<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Divide\Divide;
use MyApp\Component\AddResquest\AddResquest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DivideController
{
    public function divideAction($param1, Request $request)
    {
        $divideObj = new Divide();
        $request = new AddResquest($param1,$request->query->get('param2'));
        return new Response((int)$divideObj->execute($request));
    }
}