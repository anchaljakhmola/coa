<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        
        return new Response('<html><body>Admin page!</body></html>');
    }
}
