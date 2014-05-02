<?php

namespace ZfSnapJquery\Libraries;

use Zend\ServiceManager\FactoryInterface;
use \Zend\ServiceManager\ServiceLocatorInterface;

/**
 * TimepickerAddon Factory
 *
 * @author Naomi Gotts <knome2001@hotmail.com>
 */
class TimepickerAddonFactory implements FactoryInterface
{
    /**
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return \ZfSnapJquery\Libraries\TimepickerAddon
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config');
        $configJquery = $config['zf_snap_jquery']['libraries']['jquery-ui-timepicker-addon'];

        $jquery = $serviceLocator->get('jquery-ui-timepicker-addon-class');
        
        $jquery->setCdnStyle($configJquery['cdnStyle']);
        $jquery->setCdnScript($configJquery['cdnScript']);
        $jquery->setEnabled($configJquery['enabled']);

        return $jquery;
    }
}
?>
