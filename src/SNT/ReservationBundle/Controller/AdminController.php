<?php

namespace SNT\ReservationBundle\Controller;

use SNT\ReservationBundle\Entity\Bien;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('admin/index.html.twig', array(
        ));
    }

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
     * @Route("/test_ajax")
     */
    public function test_ajaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            extract($_POST);
            $client = $em->getRepository('RESERVATIONBundle:client')->findClientLog($login, $password);

            return $this->JsonResponse::create($client);
        }
    }
}
