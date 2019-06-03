<?php

namespace App\Form;

use App\Entity\MissingList;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class AbsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start', DateType::class, [
                // renders it as a single text box
                'widget' => 'single_text',
            ])
            ->add('end', DateType::class, [
                // renders it as a single text box
                'widget' => 'single_text',
            ])
            ->add('id_missing',ChoiceType::class,
                [
                    'choices'=>[
                        'Congés Payés' => '1',
                        'Arrêt Maladie' => '2',
                        'Arrêt maternel/paternel' => '3',
                        'Congés non payés' => '4',
                        'RTT' => '5',
                        'Formation' => '6',
                    ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MissingList::class,
        ]);
    }
}
