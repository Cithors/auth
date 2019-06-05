<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\User;

class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User::class)->findAll();
        $tab = array();
        foreach ($users as $key =>$user){
            $tab[$key]['#']= $user->getId();
            $tab[$key]['nom']= $user->getLastname();
            $tab[$key]['prénom']=$user->getName();
        }
        return new JsonResponse($tab);
    }
}
