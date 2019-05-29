<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class AdminController extends AbstractController{
    /**
     * @Route("/admin", name="admin")
     */
    public function main(){
        $liste = $this->getDoctrine()->getManager();
        $tab = $liste->getRepository(User::class)->findAll();
        return $this->render('admin/index.html.twig', ['tab'=>$tab]);
    }
}