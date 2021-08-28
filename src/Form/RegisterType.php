<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array(
                'label'=>false
            ))
            ->add('password',PasswordType::class, array(
                'label'=>false
            ))
            ->add('nom' , TextType::class, array(
                "label" =>false
            ))
            ->add('prenom', TextType::class, array(
                "label" =>false
            ))
            ->add('phone', TextType::class, array(
                "label" =>false
            ))

            ->add('submit', SubmitType::class, array(
                "label" =>"S'inscrire maintenant",
                "attr" =>[
                    "class" => "btn btn-primary  w-100"
                ]
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
