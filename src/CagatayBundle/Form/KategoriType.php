<?php

namespace CagatayBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class KategoriType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('baslik')
            ->add('yazar')
            ->add('aciklama')
            ->add('aktif')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CagatayBundle\Entity\Kategori'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cagataybundle_kategori';
    }
}
