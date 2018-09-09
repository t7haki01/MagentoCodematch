<?php

namespace Survey\SurveyPage\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\Exception\LocalizedException;
use \Magento\Framework\Controller\ResultFactory;


class Index extends Action
{
  protected $_resultPageFactory;
 
  public function __construct(Context $context, PageFactory $resultPageFactory)
  {
    $this->_resultPageFactory = $resultPageFactory;
    parent::__construct($context);
  }
  
      
  public function execute()
  { 
    $resultPage = $this->_resultPageFactory->create();

    return $resultPage;     
  }

}
   
