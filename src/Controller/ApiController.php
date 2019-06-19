<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\User;
use App\Entity\Breakfast;
use App\Entity\Pastries;

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
            $tab[$key]['id']= $user->getId();
            $tab[$key]['nom']= $user->getLastname();
            $tab[$key]['prénom']=$user->getName();
        }
        return new JsonResponse($tab);
    }

    /**
     * @Route("/api_calendar", name="app_api_calendar")
     */

    public function calendar(){
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User::class)->findAll();
        $em2 = $this->getDoctrine()->getManager();
        $bfs = $em2->getRepository(Breakfast::class)->findAll();
        $tab = array();
        foreach ($bfs as $key =>$bf){
            foreach ($users as $k => $user){
                if($user->getId() == $bf->getIdUser()){
                    $tab[$key]['nom']=$user->getLastname();
                    $tab[$key]['prenom']=$user->getName();
                }
            }
            $tab[$key]['date']= $bf->getDate();
            $tab[$key]['end']=$bf->getEnd();
        }
        return new JsonResponse($tab);
    }

    
    /**
     * @Route("/api_calendar_score", name="app_api_calendar_score")
     */

    public function score(){
        $tab=$this->count();        
        return new JsonResponse($tab);
    }

    protected function count()
    {
        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT count(*) as 'count', lastname as 'nom', name as 'prenom' FROM breakfast INNER JOIN user ON user.id = breakfast.id_user WHERE status='done' GROUP BY id_user;";
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $results = $statement->fetchAll();
        return $results;
    }

    /**
     * @Route("/api_calendar_score2", name="app_api_calendar_score2")
     */

    public function score2(){
        $tab=$this->count2();        
        return new JsonResponse($tab);
    }

    protected function count2()
    {
        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT count(*) as 'count', lastname as 'nom', name as 'prenom' FROM breakfast INNER JOIN user ON user.id = breakfast.id_user WHERE status='undone' GROUP BY id_user;";
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $results = $statement->fetchAll();
        return $results;
    }
    /**
     * @Route("/api_list",name="app_api_list")
     */

    public function listbreakfast(){
        $list = $this->recap();
        return new JsonResponse($list);
    }

    public function recap(){
        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT count(*) AS 'count', pastries.name AS 'nom' FROM user INNER JOIN pastries ON user.id_pastries = pastries.id GROUP BY id_pastries;";
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $results = $statement->fetchAll();
        return $results;
    }
}