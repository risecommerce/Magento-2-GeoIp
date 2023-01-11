<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

namespace Risecommerce\GeoIp\Block\Adminhtml\System\Config\Form;

/**
 * Admin geoip configurations information block
 */
class Info extends \Risecommerce\GeoIp\Block\Infoget\System\Config\Form\Info
{
    /**
     * Return extension url
     * @return string
     */
    protected function getModuleUrl()
    {
        return 'https://mage' . 'fan.com?utm_source=m2admin_geo_ip_config&utm_medium=link&utm_campaign=regular';
    }

    /**
     * Return extension title
     * @return string
     */
    protected function getModuleTitle()
    {
        return 'GeoIp Database Extension';
    }
}
