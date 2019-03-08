<?php

namespace App\Form;

use App\DTO\TemplateDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TemplateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('motto')
            ->add('middleBackground' , FileType::class ,
                ['required' => false]
            )
            ->add('favicon' , FileType::class ,
                ['required' => false]
            )
            ->add('topBackground' , FileType::class,
                ['required' => false]
            )
            ->add('bottomBackground' , FileType::class,
                ['required' => false]
            )
            ->add('topImg' , FileType::class ,
                ['required' => false]
            )
            ->add('bottomImg' , FileType::class ,
                ['required' => false]
            )
            ->add('GO',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TemplateDTO::class,
        ]);
    }
}
