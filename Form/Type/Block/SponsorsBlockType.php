<?php

/**
 * KaikMedia CompaniesModule
 *
 * @package    KaikmediaCompaniesModule
 * @author     Kaik <contact@kaikmedia.com>
 * @copyright  KaikMedia
 * @link       https://github.com/Kaik/KaikMediaCompanies.git
 */

namespace Kaikmedia\CompaniesModule\Form\Type\Block;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class
 */
class SponsorsBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class, [
                'required'  => false
            ])
            ->add('sponsorType', TextType::class, [
                'required'  => false
            ])
            ->add('css', TextType::class, [
                'required'  => false
            ])
            ->add('template', TextType::class, [
                'required'  => false
            ])
        ;
    }

    public function getName()
    {
        return 'kaikmediacompaniesmodule_sponsors_block';
    }
}
