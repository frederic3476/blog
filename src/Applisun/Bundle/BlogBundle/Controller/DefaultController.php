<?php

namespace Applisun\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $response = new Response(json_encode(array('text'=>'Welcome')));
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }
}
