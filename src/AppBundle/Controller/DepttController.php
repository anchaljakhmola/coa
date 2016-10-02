<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DepttController extends Controller
{
    /**
     * @Route("/departments/", name="deptt_listing")
     */
    public function depttAction( Request $request)
    {

            // This list must be retrieved from DB
            $deptts = ['agri-comm', 'soil-science', 'food tech.', 'argo-metero',
                      'agri-1', 'agri-2', 'agri-3', 'agri-4', 'agri-5',
                      'agri-6', 'agri-7', 'agri-8'];

            $data = [

                    'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
                    'title' => "Departments",
                    'deptts' => $deptts,

            ];

            // replace this example code with whatever you need
            return $this->render('departments.html.twig', $data );

    }

    /**
     * @Route("/department/{depttName}")
     */
    public function depttListingAction( Request $request, $depttName='')
    {
            //This list must be retrieved from DB
            $allDeptts = ['agri-comm','soil-science', 'food tech.', 'argo-metero',
                      'agri-1', 'agri-2', 'agri-3', 'agri-4', 'agri-5',
                      'agri-6', 'agri-7', 'agri-8'];

            $faculties = array(
                        array("name"=>"Dr. A", "designation"=>"Professor", "slug"=>"a"),
                        array("name"=>"Dr. B", "designation"=>"Professor", "slug"=>"b"),
                        array("name"=>"Dr. C", "designation"=>"Professor", "slug"=>"c"),
                        array("name"=>"Dr. D", "designation"=>"Professor", "slug"=>"d"),
                        array("name"=>"Dr. E", "designation"=>"Professor", "slug"=>"e"),
                        array("name"=>"Dr. F", "designation"=>"Professor", "slug"=>"f"),
                      );

            $data = [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
                'title' => $depttName,
                'faculties' => $faculties
            ];

            if( in_array($depttName, $allDeptts) ){

                // replace this example code with whatever you need
                return $this->render('viewSpecificDeptt.html.twig', $data);
            }
            else{

                // redirects to main departments listing page "/departments/"
                return $this->redirectToRoute('deptt_listing');

            }



    }
}
