<?php


namespace App\Controller;

use App\Entity\User;
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
}