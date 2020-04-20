<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Substract\Substract;
use MyApp\Component\AddResquest\AddResquest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SubstractController
{

    public function substractAction(Request $request)
    {
        $substractObj = new Substract();
        $request = new AddResquest($request->request->get('param1'),$request->request->get('param2'));
        return new Response((int)$substractObj->execute($request));
    }
}