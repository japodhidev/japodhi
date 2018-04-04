<?php
/**
 * Created by PhpStorm.
 * User: finch
 * Date: 4/4/2018
 * Time: 10:06 AM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Request;

class ContactController extends Controller {

    /**
     * @Route("/contact", name="reach-out")
     */
    public function contactAction(){
        return $this->render('contact/contact.html.twig', array(
            'title' => 'japodhi | Contact Me'
        ));
    }
}