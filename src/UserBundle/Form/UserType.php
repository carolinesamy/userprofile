<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Form\PhoneType;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('name')
                ->add('email')
                ->add('birthdate', BirthdayType::class, array('placeholder' => array(
                        'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
            )))
                 ->add('phones',CollectionType::class , array(
                     'entry_type' => PhoneType::class , 
                     'allow_add'    => true,) ) 
                
                ->add('save', submitType::class);
    }
    
     public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User',
            'cascade_validation' => true,
        ));
    }

}
