<?php
namespace Survey\SurveyPage\Block;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Api\SortOrderBuilder;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class ListProduct extends Template
{
    protected $_productloader;  

    public function __construct(
        \Magento\Catalog\Model\ProductFactory $_productloader
    ) {
        $this->_productloader = $_productloader;
    }
    public function getProduct($id)
    {
        return $this->_productloader->create()->load($id);
    }
}


