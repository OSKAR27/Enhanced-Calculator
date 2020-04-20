<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Add\Add;
use MyApp\Component\AddResquest\AddResquest;
use Symfony\Component\HttpFoundation\Response;

class AddController
{

    public function addAction($param1, $param2)
    {
        $add_service = new Add();
        $request = new AddResquest($param1,$param2);
        return new Response((int)$add_service->execute($request));
    }
}