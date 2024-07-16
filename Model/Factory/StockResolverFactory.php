<?php
declare(strict_types=1);

namespace MageSuite\FreeGift\Model\Factory;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\InventorySalesApi\Api\StockResolverInterface;

class StockResolverFactory implements ArgumentInterface
{
    protected $_objectManager;
    protected $_instanceName;

    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        $instanceName = StockResolverInterface::class
    ) {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}