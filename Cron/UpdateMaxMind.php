<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */
namespace Risecommerce\GeoIp\Cron;

/**
 * Class UpdateMaxMind
 * @package Risecommerce\GeoIp\Cron
 */
class UpdateMaxMind
{
    /**
     * @var \Risecommerce\GeoIp\Model\GeoIpDatabase\MaxMind
     */
    protected $maxMind;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $_logger;

    /**
     * UpdateMaxMind constructor.
     * @param \Risecommerce\GeoIp\Model\GeoIpDatabase\MaxMind $maxMind
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Risecommerce\GeoIp\Model\GeoIpDatabase\MaxMind $maxMind,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->maxMind = $maxMind;
        $this->_logger = $logger;
    }

    /**
     * Execute Cron UpdateMaxMind
     */
    public function execute()
    {
        try {
            $this->maxMind->update();
        } catch (\Exception $e) {
            $this->_logger->debug($e->getMessage());
            return false;
        }
        return true;
    }
}
