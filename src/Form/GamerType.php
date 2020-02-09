<?php

namespace App\Form;

use App\Entity\Gamer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GamerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marque')
            ->add('diagonale')
            ->add('chipset')
            ->add('processeur')
            ->add('ram')
            ->add('prix')
            ->add('image')
            ->add('stockage')
            ->add('description')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gamer::class,
        ]);
    }
}
