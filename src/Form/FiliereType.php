<?php

namespace App\Form;

use App\Entity\Filiere;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FiliereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de la filière',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Informatique']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Décrivez cette filière', 'rows' => 4]
            ])
            ->add('conditions_admission', TextareaType::class, [
                'label' => 'Conditions d\'admission',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Conditions et pré-requis', 'rows' => 4]
            ])
            ->add('debouches', TextareaType::class, [
                'label' => 'Débouchés professionnels',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Opportunités de carrière', 'rows' => 4]
            ])
            ->add('niveau', TextType::class, [
                'label' => 'Niveau',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Licence, Master']
            ])
            ->add('domaine', TextType::class, [
                'label' => 'Domaine',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Informatique, Commerce...']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Filiere::class,
        ]);
    }
}
