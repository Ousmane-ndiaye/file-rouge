<?php

namespace SNT\ReservationBundle\Controller;

use SNT\ReservationBundle\Entity\Bien;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/listebien")
     */
    public function listebienAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBien(null, null, null, null);

        return $this->render('admin/listebien.html.twig', array(
            'biens' => $biens,
        ));
    }

    /**
     * @Route("/listebien")
     */
    public function test_ajaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBien(null, null, null, null);

        return $this->render('admin/listebien.html.twig', array(
            'biens' => $biens,
        ));
    }
}
