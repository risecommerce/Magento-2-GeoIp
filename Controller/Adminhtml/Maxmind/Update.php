<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

namespace Risecommerce\GeoIp\Controller\Adminhtml\Maxmind;

use Magento\Framework\Controller\ResultFactory;

/**
 * Class DownloadDb
 * @package Risecommerce\GeoIp\Controller\Adminhtml\Ajax
 */
class Update extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Risecommerce_GeoIp::geo_ip';

    /**
     * @var \Risecommerce\GeoIp\Model\GeoIpDatabase\MaxMind
     */
    protected $maxMind;

    /**
     * Update constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Risecommerce\GeoIp\Model\GeoIpDatabase\MaxMind $maxMind
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Risecommerce\GeoIp\Model\GeoIpDatabase\MaxMind $maxMind
    ) {
        parent::__construct($context);
        $this->maxMind = $maxMind;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     * @throws \Magento\Framework\Exception\FileSystemException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        try {
            $this->maxMind->update();
            $this->messageManager->addSuccessMessage('MaxMind GeoIP Database has been updated successfully.');
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage('Something went wrong while updating the GeoIP database.');
        }

        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
    }
}
