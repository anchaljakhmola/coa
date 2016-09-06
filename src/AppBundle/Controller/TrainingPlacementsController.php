<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TrainingPlacementsController extends Controller
{
    /**
     * @Route("/training-placements/")
     */
    public function passPantnagarAction(Request $request)
    {
        // replace this example code with whatever you need
        $data = array(
                      'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
                      'title' => "T. & P.",
                      'tnpIntro' => "lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
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
                      Integer pellentesque pharetra nibh.

                      Maecenas tincidunt nisl at risus viverra, vel tristique turpis
                      fermentum. Etiam ut ornare nisl. Ut ac tristique arcu, eu blandit
                      quam. Nulla lacus sapien, blandit sit amet ante quis, consectetur
                      consectetur tellus. Nulla venenatis ligula mi, vitae convallis
                      metus dictum id. Pellentesque a lacus sagittis, commodo neque a,
                      tempus ex. Phasellus ut accumsan tellus.

                      Cum sociis natoque penatibus et magnis dis parturient montes,
                      nascetur ridiculus mus. Maecenas quis ultrices arcu. Sed
                      consectetur mollis risus quis tempus. Nullam dolor ipsum, p
                      orttitor non est a, tristique accumsan mi. Nullam molestie diam l
                      orem, non viverra orci ultrices vel. Fusce cursus urna ut nisl
                      vehicula consectetur. Phasellus sed mi non purus euismod malesuada.
                      Suspendisse ut erat et enim ultrices interdum. Aliquam orci quam,
                      pulvinar eu facilisis sed, laoreet id velit. Duis posuere purus
                      ex, nec rhoncus tellus lacinia quis. Vestibulum bibendum, nisi
                      in ornare auctor, erat ipsum laoreet neque, a malesuada turpis
                      orci id magna. Aliquam feugiat pretium arcu, id facilisis mauris
                      consectetur non. Quisque quis eros eget lacus cursus dictum sed eget
                      lacus. Fusce tempus dui ultricies mauris mollis egestas",

        );
        return $this->render('trainingPlacements.html.twig', $data);
    }
}
