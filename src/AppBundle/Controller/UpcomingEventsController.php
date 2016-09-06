<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UpcomingEventsController extends Controller
{
    /**
     * @Route("/upcoming-events/")
     */
    public function upcomingEventsAction(Request $request)
    {
        // replace this example code with whatever you need
        $data = array(
                      'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
                      'title' => "Upcoming Events",
                      'events' => array(
                                    array("day" => 20,
                                    "month" => "May",
                                    "year" => 2016,
                                    "title" => "Event 1",
                                    "detail" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                    vitae suscipit ante, eget molestie purus. Phasellus non urna a
                                    nulla scelerisque fringilla. Nunc nec nunc lacinia, aliquet mauris
                                    id, consectetur nunc. Suspendisse a mi quam. Mauris congue,
                                    tellus quis tincidunt aliquet, ante odio pulvinar quam, a commodo
                                    isus enim at lacus. Nulla volutpat leo urna, et blandit nisl
                                    pulvinar vitae. Sed eu hendrerit nibh, sed congue tortor. Nulla
                                    fermentum, dolor id facilisis auctor, ex arcu tempus urna, in
                                    consequat elit metus eget ligula. Nam ac suscipit enim. Quisque
                                    sollicitudin dui sed velit cursus molestie. In id egestas orci.
                                    Sed sed sapien iaculis, efficitur tortor pulvinar, feugiat nisi.
                                    Integer pellentesque pharetra nibh.",),

                                    array("day" => 20,
                                    "month" => "May",
                                    "year" => 2016,
                                    "title" => "Event 1",
                                    "detail" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                    vitae suscipit ante, eget molestie purus. Phasellus non urna a
                                    nulla scelerisque fringilla. Nunc nec nunc lacinia, aliquet mauris
                                    id, consectetur nunc. Suspendisse a mi quam. Mauris congue,
                                    tellus quis tincidunt aliquet, ante odio pulvinar quam, a commodo
                                    isus enim at lacus. Nulla volutpat leo urna, et blandit nisl
                                    pulvinar vitae. Sed eu hendrerit nibh, sed congue tortor. Nulla
                                    fermentum, dolor id facilisis auctor, ex arcu tempus urna, in
                                    consequat elit metus eget ligula. Nam ac suscipit enim. Quisque
                                    sollicitudin dui sed velit cursus molestie. In id egestas orci.
                                    Sed sed sapien iaculis, efficitur tortor pulvinar, feugiat nisi.
                                    Integer pellentesque pharetra nibh.",),

                                    array("day" => 20,
                                    "month" => "May",
                                    "year" => 2016,
                                    "title" => "Event 1",
                                    "detail" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                    vitae suscipit ante, eget molestie purus. Phasellus non urna a
                                    nulla scelerisque fringilla. Nunc nec nunc lacinia, aliquet mauris
                                    id, consectetur nunc. Suspendisse a mi quam. Mauris congue,
                                    tellus quis tincidunt aliquet, ante odio pulvinar quam, a commodo
                                    isus enim at lacus. Nulla volutpat leo urna, et blandit nisl
                                    pulvinar vitae. Sed eu hendrerit nibh, sed congue tortor. Nulla
                                    fermentum, dolor id facilisis auctor, ex arcu tempus urna, in
                                    consequat elit metus eget ligula. Nam ac suscipit enim. Quisque
                                    sollicitudin dui sed velit cursus molestie. In id egestas orci.
                                    Sed sed sapien iaculis, efficitur tortor pulvinar, feugiat nisi.
                                    Integer pellentesque pharetra nibh.",),

                                    array("day" => 20,
                                    "month" => "May",
                                    "year" => 2016,
                                    "title" => "Event 1",
                                    "detail" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                    vitae suscipit ante, eget molestie purus. Phasellus non urna a
                                    nulla scelerisque fringilla. Nunc nec nunc lacinia, aliquet mauris
                                    id, consectetur nunc. Suspendisse a mi quam. Mauris congue,
                                    tellus quis tincidunt aliquet, ante odio pulvinar quam, a commodo
                                    isus enim at lacus. Nulla volutpat leo urna, et blandit nisl
                                    pulvinar vitae. Sed eu hendrerit nibh, sed congue tortor. Nulla
                                    fermentum, dolor id facilisis auctor, ex arcu tempus urna, in
                                    consequat elit metus eget ligula. Nam ac suscipit enim. Quisque
                                    sollicitudin dui sed velit cursus molestie. In id egestas orci.
                                    Sed sed sapien iaculis, efficitur tortor pulvinar, feugiat nisi.
                                    Integer pellentesque pharetra nibh.",),


                                    array("day" => 20,
                                    "month" => "May",
                                    "year" => 2016,
                                    "title" => "Event 1",
                                    "detail" => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                    vitae suscipit ante, eget molestie purus. Phasellus non urna a
                                    nulla scelerisque fringilla. Nunc nec nunc lacinia, aliquet mauris
                                    id, consectetur nunc. Suspendisse a mi quam. Mauris congue,
                                    tellus quis tincidunt aliquet, ante odio pulvinar quam, a commodo
                                    isus enim at lacus. Nulla volutpat leo urna, et blandit nisl
                                    pulvinar vitae. Sed eu hendrerit nibh, sed congue tortor. Nulla
                                    fermentum, dolor id facilisis auctor, ex arcu tempus urna, in
                                    consequat elit metus eget ligula. Nam ac suscipit enim. Quisque
                                    sollicitudin dui sed velit cursus molestie. In id egestas orci.
                                    Sed sed sapien iaculis, efficitur tortor pulvinar, feugiat nisi.
                                    Integer pellentesque pharetra nibh.",),

                      ),


        );
        return $this->render('forthcomingEvents.html.twig', $data);
    }
}
