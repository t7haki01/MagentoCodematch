<?php

namespace Survey\SurveyPage\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Element\Messages;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use \Magento\Framework\App\Request\DataPersistorInterface;
use \Magento\Framework\App\ObjectManager;
use \Magento\Framework\Exception\LocalizedException;
use \Magento\Framework\Controller\ResultFactory;

use Survey\SurveyPage\Model\AnswerFactory;

class Result extends Action
{
    protected $_resultPageFactory;
    protected $_messageManager;
    

    public function __construct(Context $context, 
        PageFactory $resultPageFactory,
        AnswerFactory $answerFactory,
        \Magento\Framework\Message\ManagerInterface $messageManager
    )
    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->resultAnswerFactory = $answerFactory;
        parent::__construct($context);
        $this->_messageManager = $messageManager;

    }


    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();

        $data = $this->getRequest()->getPost();
        
        $answer = $this->resultAnswerFactory->create();

        //here is the saving data part with referencing the method from model, so called factory
        $answer->setQuestion1($data['question1']);
        $answer->setQuestion2($data['question2']);
        $answer->setQuestion3($data['question3']);
        $answer->setProduct($data['product']);

        $msg =""; 

        if(!empty($data['question1']) && !empty($data['question2'])
        && !empty($data['question3']) && !empty($data['product'])){
            $answer->save(); 
            $msg = 'Survey saved successfully';
            
            //This part is for checking the communication with database thorugh the log message
            $log_msg ='data saved as Q1: ' .$answer->getQuestion1().' Q2: '.$answer->getQuestion2().
            ' Q3: '.$answer->getQuestion3().' Product: '.$answer->getProduct() ;
            echo "<script>console.log('PHP: ".$log_msg."');</script>" ;

            $messageBlock = $resultPage->getLayout()->createBlock(
                'Magento\Framework\View\Element\Messages',
                'answer'
            );
            $messageBlock->addSuccess($msg);
            $resultPage->getLayout()->setChild(
                'content',
                $messageBlock->getNameInLayout(),
                'answer_alias'
            );

            return $resultPage;

        }else{
            $msg = 'Survey Fail';
        
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $this->messageManager->addError(__("Error"));
            $resultRedirect->setUrl($this->_redirect->getRefererUrl());
            
            return $resultRedirect;
        }
        
    }
    
}