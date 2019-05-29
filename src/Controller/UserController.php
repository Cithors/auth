<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class UserController extends AbstractController{
    /**
     * @Route("/home", name="home")
     */
    public function main(){
        $liste = $this->getDoctrine()->getManager();
        $tab = $liste->getRepository(User::class)->findAll();
        return $this->render('home/index.html.twig', ['tab'=>$tab]);
    }
}