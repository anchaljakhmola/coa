<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    /**
     * @Route("/contact/")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        // contact details
        $contactList = array(
          array("name"=>"Dr. A", "designation"=>"(Dean)", "phoneNumber"=>"9090909090"),
          array("name"=>"Dr. B", "designation"=>"(HOD)", "phoneNumber"=>"9090909090"),
          array("name"=>"Dr. C", "designation"=>"(Professor)", "phoneNumber"=>"9090909090"),
          array("name"=>"Dr. D", "designation"=>"(Astt. Professor)", "phoneNumber"=>"9090909090"),
          array("name"=>"Dr. E", "designation"=>"(Professor)", "phoneNumber"=>"9090909090"),
          array("name"=>"Dr. F", "designation"=>"(Astt. Professor)", "phoneNumber"=>"9090909090"),
        );

        $data = [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
          'title' => "Contact us",
          'contactList' => $contactList,
        ];

        return $this->render('contactus.html.twig', $data);
      // return new Response(var_dump($contactList));

    }
}
