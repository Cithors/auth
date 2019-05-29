<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Form\UpdateFormType;

class UpdateUserController extends AbstractController{
    /**
     * @Route("/updateuser",name="update.user")
     */
    public function main(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $id = dump($request->query->get('id'));

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findBy(['id' => $id]);
        $user = $user['0'];
        $form = $this->createForm(UpdateFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $date = new \Datetime("today");
            $user->setDateModif($date);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render("home/upuser.html.twig", ['registrationForm'=>$form->createView()]);
    }
}