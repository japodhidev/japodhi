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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\ContactType;

class ContactController extends Controller {

    /**
     * @Route("/contact/success", name="reach-out")
     */
    public function contactAction() {
        return $this->render('contact/contact.html.twig', array('title'=>'Japodhi | Contact'));
    }
}