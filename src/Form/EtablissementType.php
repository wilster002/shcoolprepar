<?php

namespace App\Form;

use App\Entity\Etablissement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtablissementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de l\'établissement',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Donnez le nom de votre établissement']
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation de l\'établissement',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Décrivez l\'emplacement de votre établissement']
            ])
            ->add('contact', IntegerType::class, [
                'label' => 'Contact de l\'établissement',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Le contact de votre établissement']
            ])
            ->add('type', TextType::class, [
                'label' => 'Catégorie',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Votre catégorie d\'enseignement']
            ])
            ->add('latitude', NumberType::class, [
                'label' => 'Latitude',
                'attr' => ['class' => 'form-control', 'placeholder' => '48.8566']
            ])
            ->add('longitude', NumberType::class, [
                'label' => 'Longitude',
                'attr' => ['class' => 'form-control', 'placeholder' => '2.3522']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Etablissement::class,
        ]);
    }
}
