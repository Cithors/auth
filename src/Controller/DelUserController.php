<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class DelUserController extends AbstractController{
    /**
     * @Route("/deluser",name="deluser")
     */
    public function main(Request $request){
        $id = dump($request->query->get('id'));
        return $this->render('home/deluser.html.twig',['id' => $id]);
    }

    /**
     * @Route("/traitement/deluser",name="trait.deluser")
     */
    public function valide(Request $request){
        $id = dump($request->query->get('id'));
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findBy(['id' => $id]);
        $em->remove($user['0']);
        $em->flush();

        return $this->redirectToRoute('home');
    }
}