<?php

namespace App\Controller;

use App\Entity\Pastries;
use App\Entity\Missing;
use App\Entity\MissingList;
use App\Form\RegistrationFormType;
use App\Form\UpdateFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController{

    /**
     * @Route("/home", name="home")
     */
    public function main(){
        $liste = $this->getDoctrine()->getManager();
        $tab = $liste->getRepository(User::class)->findAll();
        $pastry = $this->getDoctrine()->getManager();
        $pastries = $pastry->getRepository(Pastries::class)->findAll();
        return $this->render('home/index.html.twig', ['tab'=>$tab,'pastries'=>$pastries]);
    }

    /**
     * @Route("/updateuser",name="update.home")
     */
    public function up(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $id = dump($request->query->get('id'));

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['id' => $id]);
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

    /**
     * @Route("/deluser",name="deluser")
     */
    public function del(Request $request){
        $id = dump($request->query->get('id'));
        return $this->render('home/deluser.html.twig',['id' => $id]);
    }

    /**
     * @Route("/traitement/deluser",name="trait.deluser")
     */
    public function valide(Request $request){
        $id = $request->query->get('id');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findBy(['id' => $id]);
        $em->remove($user['0']);
        $em->flush();

        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/adduser", name="ajout.user")
     */
    public function adduser(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email

            return $this->redirectToRoute('home');
        }

        return $this->render('home/adduser.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the home
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig',['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     */
    public function logout()
    {
        // controller can be blank: it will never be executed!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }

    /**
     * @Route("/absences",name="app_absences")
     */

    public function abs(){
        $list = $this->getDoctrine()->getManager();
        $user = $list->getRepository(User::class)->findAll();
        $missing = $this->getDoctrine()->getManager();
        $missings = $missing->getRepository(Missing::class)->findAll();
        $tab = $this->getDoctrine()->getManager();
        $missingl = $tab->getRepository(MissingList::class)->findAll();

        return $this->render('abs/index.html.twig', ['user'=>$user,'missing'=>$missings,'list'=>$missingl]);
    }

    /**
     * @Route("/api_login",name="app_api_login")
     */
    public function reactlogin(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new user();
        $user->setEmail($_POST['mail']);
        $user->setPassword($passwordEncoder->encodePassword($user,$_POST['pwd']));
        $list = $this->getDoctrine()->getManager();
        $users = $list->getRepository(User::class)->findAll();
        foreach($users as $tab){
            if($tab->getEmail()==$user->getEmail()){
                if($tab->getPassword()==$user->getPassword()){
                    return $this->redirect('http://localhost:3000');
                }else{
                    dd($tab->getPassword(),$user->getPassword());
                }
            }
        }
    }
}