<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('FirstName', TextType::class, [
            'label' => 'Votre Prénom', 'attr' => ['placeholder'=>'Prénom']])//choisir ce qui s'affiche quand on tape textType (use Symfony\Component\Form\Extension\Core\Type\TextType;))
        
        ->add('lastName', TextType::class, [
            'label' => 'Votre Nom', 'attr' => ['placeholder'=>'Nom']])
       
        ->add('email', EmailType::class, [
            'label' => 'Votre Email', 'attr' => ['placeholder'=>'Email']])//emailType à choisir pour obliger à l'utilisateur de mettre un @
      
        ->add('password', PasswordType::class, [
            'label' => 'Votre Mot De Passe', 'attr' => ['placeholder'=>'Mot De Passe']])//passwordType, permet de mettre des petits points ds le champs au lieu de voir les caractères

        ->add('password_confirm', PasswordType::class, [
                'label' => 'Reconfirmez Votre Mot De Passe', 
                'mapped' => false,//Pour ne pas être lié à l’entity
                'attr' => ['placeholder'=>'Mot De Passe']
                 ])   

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}