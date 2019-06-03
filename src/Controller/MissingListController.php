<?php


namespace App\Controller;

use App\Entity\MissingList;
use App\Entity\Missing;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AbsFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;

class MissingListController extends AbstractController
{
    /**
     * @Route("/annuler",name="app_del_missing")
     */
    public function del(Request $request){
        $id = $request->query->get('id');
        return $this->render("abs/delabs.html.twig",['id'=>$id]);
    }

    /**
     * @Route("/traitement/delabs",name="trait.delabs")
     */
    public function validedel(Request $request){
        $id = $request->query->get('id');

        $em = $this->getDoctrine()->getManager();
        $missing = $em->getRepository(MissingList::class)->findOneBy(['id' => $id]);
        $missing->setStatus('annulé');
        $em->flush();

        return $this->redirectToRoute('app_absences');
    }
    /**
     * @Route("/valider",name="app_add_missing")
     */
    public function addmissing(Request $request){
        $id = $request->query->get('id');
        return $this->render("abs/addabs.html.twig",['id'=>$id]);
    }

    /**
     * @Route("/traitement/addabs",name="trait.addabs")
     */
    public function valideadd(Request $request){
        $id = $request->query->get('id');

        $em = $this->getDoctrine()->getManager();
        $missing = $em->getRepository(MissingList::class)->findOneBy(['id' => $id]);
        $missing->setStatus('validé');
        $em->flush();

        return $this->redirectToRoute('app_absences');
    }

    /**
     * @Route("/refuser",name="app_nope_missing")
     */
    public function nomissing(Request $request){
        $id = $request->query->get('id');
        return $this->render("abs/noabs.html.twig",['id'=>$id]);
    }

    /**
     * @Route("/traitement/noabs",name="trait.noabs")
     */
    public function valideno(Request $request){
        $id = $request->query->get('id');

        $em = $this->getDoctrine()->getManager();
        $missing = $em->getRepository(MissingList::class)->findOneBy(['id' => $id]);
        $missing->setStatus('refusé');
        $em->flush();

        return $this->redirectToRoute('app_absences');
    }

    /**
     * @Route("/askabs",name="app_askabs")
     */

    public function askabs(Request $request, UserInterface $user){
        $missing = new MissingList();
        $form = $this->createForm(AbsFormType::class, $missing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $missing->setIdUser($user->getId());
            $missing->setStatus('en attente');
            $entityManager->persist($missing);
            $entityManager->flush();

            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_absences');
        }

        return $this->render('abs/askabs.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}