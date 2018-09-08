<?php

namespace Survey\SurveyPage\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Messages;
use Magento\Framework\View\Result\PageFactory;
use Survey\SurveyPage\Model\AnswerFactory;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\App\ObjectManager;

class Result extends Action
{

    public function __construct(Context $context, 
        PageFactory $pageFactory,
        AnswerFactory $answerFactory/*, ObjectManager $objectManager*/)
    {
        $this->resultPageFactory = $pageFactory;
        $this->resultAnswerFactory = $answerFactory;
        // $this->_objectManager = $objectManager;
        parent::__construct($context);
    }


    public function execute()
    {
        // $resultAnswer = $this->resultAnswerFactory->getQuestion1();
        $data = $this->getRequest()->getPost();
        
        // $model = $objectManager->create('Survey\SurveyPage\Model\Answer');
        $model = $this->resultAnswerFactory->create('Survey\SurveyPage\Model\Answer');
        $model->setQuestion1($data['question1']);

        $model->setData('question1', $data['question1']);  

        $msg =""; 

        if($data != ''){ 
            $model->save(); 
            $msg = 'saved successfully';
        }else{ 
             $msg = 'not saved';  
        } 
        echo $msg;
    }




        // $resultPage = $this->resultPageFactory->create();

        // /** @var Messages $messageBlock */
        // $messageBlock = $resultPage->getLayout()->createBlock(
        //     'Magento\Framework\View\Element\Messages',
        //     'answer'
        // );
        
        // $messageBlock->addSuccess($answer);
        
        // $resultPage->getLayout()->setChild(
        //     'content',
        //     $messageBlock->getNameInLayout(),
        //     'answer_alias'
        // );

        // return $resultPage.$resultAnswer;
    // }
}