<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use UserBundle\Form\PhoneType;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('name')
                ->add('email')
                ->add('birthdate', BirthdayType::class, array('placeholder' => array(
                        'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
            )))
                /* ->add('phone',CollectionType::class,array('entry_type' => PhoneType::class ) ) */
                ->add('save', submitType::class);
    }

}
