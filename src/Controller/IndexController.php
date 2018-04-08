<?php
/**
 * Created by PhpStorm.
 * User: finch
 * Date: 4/3/2018
 * Time: 7:48 PM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller {

    /**
     * @Route("/", name="homepage")
     */

    public function homeAction() {

        return $this->render('home/home.html.twig', array(
            'title' => 'japodhi | Web development'
        ));
    }
}