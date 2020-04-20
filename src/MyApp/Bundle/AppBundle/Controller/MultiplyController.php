<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Multiply\Multiply;
use MyApp\Component\AddResquest\AddResquest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MultiplyController
{
    public function multiplyAction(Request $request)
    {
        $multiplyObj = new Multiply();
        $request = new AddResquest($request->query->get('param1'),$request->query->get('param2'));
        return new Response((int)$multiplyObj->execute($request));
    }
}