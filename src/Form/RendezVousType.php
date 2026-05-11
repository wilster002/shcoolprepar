<?php

namespace App\Form;

use App\Entity\RendezVous;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_heure', DateTimeType::class, [
                'label' => 'Date et heure du rendez-vous',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('statut', TextType::class, [
                'label' => 'Statut',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Confirmé, En attente...']
            ])
            ->add('type', TextType::class, [
                'label' => 'Type de rendez-vous',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Consultation, Réunion...']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }
}
