<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FacultyController extends Controller
{
    /**
     * @Route("/faculty/{facultySlug}/", name="facultyName")
     */
    public function facultyAction( Request $request, $facultySlug = '')
    {
            //This list must be retrieved from DB
            $facultySlugs = ['a','b','c','d','e','f'];

                $data = array(

                              'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
                              'title' => $facultySlug,
                              'deanImgPath' => "drjkumar.jpg",
                              'deanName' => "Dr. J. kumar",
                             );

            if( in_array($facultySlug, $facultySlugs) ){

                // replace this example code with whatever you need
                return $this->render('facultyname.html.twig', $data);
            }
            return new Response(
            '<html><body>
             Faculty not found.
            </body></body></html>'
        );
    }
}
