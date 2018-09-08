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
    $this->_resultPageFactory = $resultPageFactory;
    parent::__construct($context);
  }
  
      
  public function execute()
  { 
    $resultPage = $this->_resultPageFactory->create();

    // $post = (array) $this->getRequest()->getPost();

    //       if (!empty($post)) {
    //           // Retrieve your form data
    //           $question1   = $post['question1'];
    //           $question2    = $post['question2'];

    //           // Display the succes form validation message
    //           $this->messageManager->addSuccessMessage('Thank you for the Survey');

    //           // Redirect to your form page (or anywhere you want...)
    //           $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
    //           $resultRedirect->setUrl('survey/index/result');

    //           return $resultRedirect;
    //       }
    //     $this->_view->loadLayout();
    //     $this->_view->renderLayout();

          return $resultPage;
        
        // 2. GET request : Render the booking page 
        
  }

}
   
