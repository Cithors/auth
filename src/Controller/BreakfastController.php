<?php


namespace App\Controller;

use App\Entity\User;
use App\Entity\Pastries;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Breakfast;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BreakfastController extends AbstractController
{
    /**
     * @Route("/breakfast", name="app_breakfast")
     */
    public function show(Request $request){
        $list = $this->getDoctrine()->getManager();
        $user = $list->getRepository(User::class)->findAll();
        $breakfast = $this->getDoctrine()->getManager();
        $breakfastlist = $breakfast->getRepository(Breakfast::class)->findAll();
        $breakfastscore = $this->count();

        return $this->render("breakfast/index.html.twig", ['user'=>$user,'breakfast1'=>$breakfastlist, 'breakfast2'=>$breakfastscore]);
    }

    protected function count()
    {
        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT COUNT(*) AS 'count', id_user FROM breakfast GROUP BY id_user;";
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    /**
     * @Route("/breakfast/list",name="app_breakfast_list")
     */

    public function listbreakfast(Request $request){
        $pastries = $this->getDoctrine()->getManager();
        $pastrieslist = $pastries->getRepository(Pastries::class)->findAll();
        $list = $this->recap();
        return $this->render("breakfast/recap.html.twig", ['list'=>$list,'plist'=>$pastrieslist]);
    }

    public function recap(){
        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT COUNT(*) AS 'count', id_pastries FROM user GROUP BY id_pastries;";
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    /**
     * @Route("api_form",name="app_api_form")
     */
    public function addbreakfast(Request $request): Response
    {
        $breakfast = new Breakfast();
        $breakfast->setDate(new \DateTime($_POST['date'].' '.$_POST['start']));
        $breakfast->setEnd(new \DateTime($_POST['date'].' '.$_POST['end']));
        $breakfast->setIdUser($_POST['id']);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($breakfast);
        $entityManager->flush();
        return $this->redirect('http://localhost:3000');
    }
}