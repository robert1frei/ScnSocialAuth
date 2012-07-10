<?php
/**
 * ScnSocialAuth Module
 *
 * @category   ScnSocialAuth
 * @package    ScnSocialAuth_Service
 */

namespace ScnSocialAuth\Service;

use ScnSocialAuth\Controller\UserController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * @category   SIgnCom
 * @package    SIgnCom_Controller
 * @copyright  Copyright (c) 2006-2011 IGN Entertainment, Inc. (http://corp.ign.com/)
 */
class UserControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        $hybridAuth = $services->get('HybridAuth');
        $moduleOptions = $services->get('ScnSocialAuth-ModuleOptions');

        $controller = new UserController();
        $controller->setHybridAuth($hybridAuth);
        $controller->setOptions($moduleOptions);

        return $controller;
    }
}
