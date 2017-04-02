<?php

namespace ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Descriptif_projetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('indicateurs','entity',[
                'class' => 'IndicateurBundle:Indicateur',
                'property' => 'libelleIndicateur',
                'multiple' => false ])
            ->add('indicateurs','entity',[
            'class' => 'IndicateurBundle:Indicateur',
            'property' => 'libelleIndicateur',
            'multiple' => false ])

            ->add('save', SubmitType::class,[
                'label' => 'Sauvegarder',
                'attr' => ['class'=>'btn btn-primary'
                ]
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjetBundle\Entity\Descriptif_projet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projetbundle_descriptif_projet';
    }


}
