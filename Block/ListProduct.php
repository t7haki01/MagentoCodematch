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
    private $productRepository;

    private $searchCriteriaBuilder;

    private $sortOrderBuilder;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        SortOrderBuilder $sortOrderBuilder,
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->sortOrderBuilder = $sortOrderBuilder;
    }

    public function getProducts()
    {
        // Filter products weighing 10kg or more
        // $this->searchCriteriaBuilder
        //     ->addFilter();

        // Sort products heaviest to lightest
        // $sortOrder = $this->sortOrderBuilder
            // ->setField()
            // ->setDirection(SortOrder::SORT_DESC)
            // ->create();
        // $this->searchCriteriaBuilder->addSortOrder($sortOrder);

        // Get the first 5 products
        $this->searchCriteriaBuilder
            ->setPageSize(5)
            ->setCurrentPage(1);

        // Create the SearchCriteria
        $searchCriteria = $this->searchCriteriaBuilder->create();

        // Load the products
        $products = $this->productRepository
            ->getList(/*$searchCriteria*/)
            ->getItems();

        return $products;
    }
}


