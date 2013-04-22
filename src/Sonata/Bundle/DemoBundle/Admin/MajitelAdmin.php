<?php
namespace Sonata\Bundle\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MajitelAdmin extends Admin
{
    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('meno')
            ->add('email')
            ->add('restauracie')
        ;
    }

    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('meno')
                ->add('email')
//                 ->add('test', 'time')
                ->add('restauracie', 'sonata_type_collection', array(), array(
                    'edit' => 'standard',
//                     'inline' => 'table',
//                     'sortable'  => 'position'
                ))
//                 ->add('restauracie', 'sonata_type_model', array(
//                         'multiple' => true,
//                         'expanded' => true))
            ->end()
            ->setHelps(array(
                    'meno' => 'Zadajte Meno'
                    ))
        ;
    }

    public function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('meno')
            ->add('restauracie')
            ->add('_action', 'actions', array(
                    'actions' => array(
                            'view' => array(),
                            'edit' => array(),
                            'delete' => array()
                            )
                    ))
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('meno')
        ;
    }
}
