<?php

namespace App\Form;

use App\DTO\FullOrderDTO;
use App\Entity\Client;
use App\Entity\Product;
use App\Entity\Status;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('amount')
            ->add('product',EntityType::class ,[
                'class' => Product::class,
            ])
            ->add('status',EntityType::class ,[
                'class' => Status::class,
            ])
            ->add('client',EntityType::class ,[
                'class' => Client::class,
            ])
            ->add('GO',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FullOrderDTO::class,
        ]);
    }
}
