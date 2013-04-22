<?php
namespace Sonata\Bundle\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class RestauraciaAdmin extends Admin
{
    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nazov')
            ->add('popis')
            ->add('majitel')
        ;
    }

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
//                 ->add('enabled', null, array('required' => false))
//                 ->add('author', 'sonata_type_model', array(), array('edit' => 'list'))
                ->add('nazov')
                ->add('popis')
                ->add('majitel', 'sonata_type_model')
//                 ->add('content')
            ->end()
//             ->with('Tags')
//                 ->add('tags', 'sonata_type_model', array('expanded' => true))
//             ->end()
//             ->with('Options', array('collapsed' => true))
//                 ->add('commentsCloseAt')
//                 ->add('commentsEnabled', null, array('required' => false))
//             ->end()
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nazov')
            ->add('popis')
            ->add('majitel')
            ->add('majitel.email')
//             ->add('enabled')
//             ->add('tags')
//             ->add('commentsEnabled')
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nazov')
            ->add('popis')
//             ->add('tags', null, array('filter_field_options' => array('expanded' => true, 'multiple' => true)))
        ;
    }
}
