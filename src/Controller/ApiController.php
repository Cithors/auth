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
        $RAW_QUERY = "SELECT COUNT(*) AS 'count', id_user FROM breakfast GROUP BY id_user;";
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $results = $statement->fetchAll();
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User::class)->findAll();
        $tab = [];
        foreach ($results as $key =>$result){
            foreach ($users as $k => $user){
                if($user->getId() == $result['id_user']){
                    $tab[$key]['nom']=$user->getLastname();
                    $tab[$key]['prenom']=$user->getName();
                }
            }
            $tab[$key]['count']= $results[$key]['count'];
        }
        return $tab;
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
        $RAW_QUERY = "SELECT COUNT(*) AS 'count', id_pastries FROM user GROUP BY id_pastries;";
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $results = $statement->fetchAll();
        $pastries = $this->getDoctrine()->getManager();
        $pastrieslist = $pastries->getRepository(Pastries::class)->findAll();
        $tab = [];
        foreach ($results as $key =>$result){
            foreach ($pastrieslist as $k => $pastry){
                if($pastry->getId() == $result['id_pastries']){
                    $tab[$key]['nom']=$pastry->getName();
                }
            }
            $tab[$key]['count']= $results[$key]['count'];
        }
        return $tab;
    }
}
