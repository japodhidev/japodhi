<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Form\ContactType;

class IndexController extends Controller {

    /**
     * @Route("/", name="homepage")
     */

    public function homeAction(Request $request, \Swift_Mailer $mailer) {

        $form = $this->createForm(ContactType::class);
        $form->get('name')->getData();
        $form->get('email')->getData();
        $form->get('message')->getData();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $email = $data['email'];
            $name = $data['name'];
            $message = $data['message'];
            $email_to = "axelbryant04@gmail.com";

            $msg = (new \Swift_Message('Email from japodhi.com'))
                ->setFrom($email)
                ->setTo($email_to)
//                ->setBody($message);
                ->setBody(
                    $this->renderView('emails/email.html.twig', array(
                        'title' => 'You got mail.', 'name' => $name, 'msg' => $message, 'email' => $email)
                    ), 'text/html'
                );

            $mailer->send($msg);



            return $this->render('contact/contact.html.twig', array(
                'title' => 'Japodhi | Web Developer',
                'success_msg' => array('name' => $name)
            ));

        } else {
            return $this->render('home/home.html.twig', array(
                'title' => 'Japodhi | Web Developer',
                'form' => $form->createView()
            ));
        }

    }
    /**
     * @Route("/test", name="test")
     */
    public function testAction(){
        return $this->render('mail.html.twig', array (
            'title' => 'Mail view test'
        ));
    }


}