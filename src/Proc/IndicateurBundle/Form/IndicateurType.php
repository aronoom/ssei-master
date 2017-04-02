<?php

namespace Proc\IndicateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IndicateurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleIndicateur',TextareaType::class)
            ->add('description','textarea')
            ->add('types','entity',[
                'class'=> 'IndicateurBundle:Type',
                'property' => 'libelleType',
                'multiple' => true
            ])
            ->add('nature','entity',[
                'class'=> 'IndicateurBundle:Nature',
                'property' => 'libelleNature',
                'multiple' => false
            ])->add('activite','entity',[
                'class'=> 'IndicateurBundle:Activite',
                'property' => 'libelleActivite',
                'multiple' => false
            ])->add('periodicite','entity',[
                'class'=> 'IndicateurBundle:Periodicite',
                'property' => 'libellePeriodicite',
                'multiple' => false
            ])->add('modeCalcul','entity',[
                'class'=> 'IndicateurBundle:Mode_calcul',
                'property' => 'libelleModeCalcul',
                'multiple' => false
            ])->add('sousSecteur','entity',[
                'class'=> 'IndicateurBundle:SousSecteur',
                'property' => 'libelleSousSecteur',
                'multiple' => false
            ])->add('subdivisions','entity',[
                'class'=> 'IndicateurBundle:Subdivision',
                'property' => 'libelleSubdivision',
                'multiple' => true
            ])->add('save', SubmitType::class,[
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
            'data_class' => 'Proc\IndicateurBundle\Entity\Indicateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'proc_indicateurbundle_indicateur';
    }


}
