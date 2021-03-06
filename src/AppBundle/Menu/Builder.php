<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\SecurityContext;

class Builder extends ContainerAware
{
    private $factory;


    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(SecurityContext $securityContext)
    {
        $menu = $this->factory->createItem('root');

        if ($securityContext->isGranted('ROLE_FD')) {
            $menu->addChild('Shift Log', array('route' => 'shiftlog_index'));
            $menu['Shift Log']->addChild('Current', array('route' => 'shiftlog_index'));
            $menu['Shift Log']->addChild('Archive', array('route' => 'shiftlog_archive_select'));

            $menu->addChild('Flight Watch', array('route' => 'fw_index'));
            $menu['Flight Watch']->addChild('Current', array('route' => 'fw_index'));
            $menu['Flight Watch']->addChild('Archive', array('route' => 'fw_archive_select'));

        }

        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $menu->addChild('Login', array('route' => 'fos_user_security_login'));
        } else {
            $menu->addChild('Logout', array('route' => 'fos_user_security_logout'));
        }

        return $menu;
    }
}
