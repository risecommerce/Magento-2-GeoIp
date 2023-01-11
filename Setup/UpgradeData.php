<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

namespace Risecommerce\GeoIp\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * @var \Magento\Framework\App\ResourceConnection
     */
    private $resources;

    /**
     * @param \Magento\Framework\App\ResourceConnection $resources [description]
     */
    public function __construct(\Magento\Framework\App\ResourceConnection $resources)
    {
        $this->resources = $resources;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $connection = $this->resources->getConnection();
        $version = $context->getVersion();
        if (version_compare($version, '2.2.0') < 0) {
            $table = $this->resources->getTableName( 'risecommerce_geoip_country' );
            if ($connection->isTableExists($table)) {
                $connection->dropTable($table);
            }
        }
    }
}