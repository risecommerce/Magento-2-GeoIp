<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

namespace Risecommerce\GeoIp\Block\Adminhtml\System\Config\Form;

use Risecommerce\GeoIp\Model\IpToCountryRepository;

/**
 * Admin configurations IP information block
 */
class IpInfo extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var \Risecommerce\GeoIp\Model\IpToCountryRepository
     */
    protected $ipRepository;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        IpToCountryRepository $ipRepository,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->ipRepository = $ipRepository;
    }

    /**
     * Return info block html
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $country =  $this->ipRepository->getVisitorCountryCode();
        if ($country == "ZZ") {
            $country = 'Undefined';
        }
        
        $ip = $this->ipRepository->getRemoteAddress();

        $html = '<div style="padding:10px;background-color:#f8f8f8;border:1px solid #ddd;margin-bottom:7px;">
            Your IP Address: ' . $ip . '<br/>
            Country: <b>' . $country . '</b>
        </div>';

        return $html;
    }

}
