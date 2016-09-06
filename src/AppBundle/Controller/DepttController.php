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
            $deptts = ['agri-comm', 'soil-science', 'food tech.', 'argo-metero'];
            
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
            $allDeptts = ['agri-comm'];

            if( in_array($depttName, $allDeptts) ){

                // replace this example code with whatever you need
                return $this->render('viewSpecificDeptt.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'), 'title' => $depttName, 
                ]); 
            }
            else{

                // redirects to main departments listing page "/departments/"
                return $this->redirectToRoute('deptt_listing');

            }

            

    }    
}


