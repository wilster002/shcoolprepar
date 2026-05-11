<?php

namespace App\Form;

use App\Entity\Quiz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre du quiz',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Quiz Symfony']
            ])
            ->add('date_passage', DateType::class, [
                'label' => 'Date de passage',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('resultst', IntegerType::class, [
                'label' => 'Résultat',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Score obtenu']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Quiz::class,
        ]);
    }
}
