<?php
/**
 * ScnSocialAuth Module
 *
 * @category   ScnSocialAuth
 * @package    ScnSocialAuth_Service
 */

namespace ScnSocialAuth\Service;

use RuntimeException;
use ScnSocialAuth\Controller\HybridAuthController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * @category   SIgnCom
 * @package    SIgnCom_Controller
 * @copyright  Copyright (c) 2006-2011 IGN Entertainment, Inc. (http://corp.ign.com/)
 */
class HybridAuthControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        $options = $services->get('ScnSocialAuth-ModuleOptions');

        if (!class_exists('Hybrid_Auth') || !class_exists('Hybrid_Endpoint')) {
            throw new RuntimeException('Unable to load Hybrid_Auth and Hybrid_Endpoint');
        }

        $controller = new HybridAuthController();

        return $controller;
    }
}
