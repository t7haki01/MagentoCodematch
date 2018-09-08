<?php

namespace Survey\SurveyPage\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Messages;
use Magento\Framework\View\Result\PageFactory;
use Survey\SurveyPage\Model\AnswerFactory;



class Result extends Action
{

    public function __construct(Context $context, 
        PageFactory $pageFactory,
        AnswerFactory $answerFactory)
    {
        $this->resultPageFactory = $pageFactory;
        $this->resultAnswerFactory = $answerFactory;
        parent::__construct($context);
    }


    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        // $resultAnswer = $this->resultAnswerFactory->getQuestion1();
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
    }
}