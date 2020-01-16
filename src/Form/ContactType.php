<?php
/**
 * Created by PhpStorm.
 * User: finch
 * Date: 4/4/2018
 * Time: 10:12 AM
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Name')))
            ->add('email', EmailType::class, array('attr' => array('class' => 'form-control', 'placeholder' => 'Email')))
            ->add('message', TextareaType::class, array('attr' => array('class' => 'form-control',
                'placeholder' => 'Message', 'cols' => 30, 'rows' => 5)));
    }
}