<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $data = array('base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
                 'title' => "Welcome",
                 'images' => array("header.jpg",
                                   "header1.jpg",
                  ),
                 'news' => array(

                    array('title'=>"this is test 1", "day"=>23, "month"=>"May", "year"=>2016, "url"=>"/test1", "matter"=>"This is just for test"),
                    array('title'=>"this is test 2", "day"=>25, "month"=>"May", "year"=>2016, "url"=>"/test2", "matter"=>"This is just for test"),
                    array('title'=>"this is test 3", "day"=>27, "month"=>"May", "year"=>2016, "url"=>"/test3", "matter"=>"This is just for test"),
                    array('title'=>"this is test 1", "day"=>23, "month"=>"May", "year"=>2016, "url"=>"/test1", "matter"=>"This is just for test"),
                    array('title'=>"this is test 2", "day"=>25, "month"=>"May", "year"=>2016, "url"=>"/test2", "matter"=>"This is just for test"),
                    array('title'=>"this is test 3", "day"=>27, "month"=>"May", "year"=>2016, "url"=>"/test3", "matter"=>"This is just for test"),
                    array('title'=>"this is test 1", "day"=>23, "month"=>"May", "year"=>2016, "url"=>"/test1", "matter"=>"This is just for test"),
                    array('title'=>"this is test 2", "day"=>25, "month"=>"May", "year"=>2016, "url"=>"/test2", "matter"=>"This is just for test"),
                    array('title'=>"this is test 3", "day"=>27, "month"=>"May", "year"=>2016, "url"=>"/test3", "matter"=>"This is just for test"),
                    array('title'=>"this is test 1", "day"=>23, "month"=>"May", "year"=>2016, "url"=>"/test1", "matter"=>"This is just for test"),
                    array('title'=>"this is test 2", "day"=>25, "month"=>"May", "year"=>2016, "url"=>"/test2", "matter"=>"This is just for test"),
                    array('title'=>"this is test 3", "day"=>27, "month"=>"May", "year"=>2016, "url"=>"/test3", "matter"=>"This is just for test"),
                 ),
                 'limit'=>6,
               );

        return $this->render('index.html.twig', $data);
    }
}
