<?php

namespace Survey\SurveyPage\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\Exception\LocalizedException;



class Index extends Action
{
  protected $_resultPageFactory;

  
  public function __construct(Context $context, PageFactory $resultPageFactory)
  {
    parent::__construct($context);
    $this->_resultPageFactory = $resultPageFactory;
  }
      
  public function execute()
  { 
    $resultPage = $this->_resultPageFactory->create();
    return $resultPage;
  }

}
   
