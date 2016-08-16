<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhoneType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('number')
                
                ->add('save', submitType::class);
    }

//    public function configureOptions(OptionsResolver $resolver) {
//        $resolver->setDefaults(array(
//            'data_class' => 'UserBundle\Entity\phone',
//        ));
//    }
}
