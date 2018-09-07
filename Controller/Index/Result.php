<?php

namespace Survey\SurveyPage\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Messages;
use Magento\Framework\View\Result\PageFactory;

class Result extends Action
{

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->resultPageFactory = $pageFactory;
        parent::__construct($context);
    }


    public function execute()
    {
        $answer = $this->getRequest()/*->getParam('question');*/;

        $resultPage = $this->resultPageFactory->create();

        /** @var Messages $messageBlock */
        $messageBlock = $resultPage->getLayout()->createBlock(
            'Magento\Framework\View\Element\Messages',
            'answer'
        );
        
        $messageBlock->addSuccess($answer);
        
        $resultPage->getLayout()->setChild(
            'content',
            $messageBlock->getNameInLayout(),
            'answer_alias'
        );

        return $resultPage;
    }
}