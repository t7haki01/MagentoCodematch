<?php

namespace Survey\SurveyPage\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Messages;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use Survey\SurveyPage\Model\AnswerFactory;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\App\ObjectManager;
use \Magento\Framework\Exception\LocalizedException;


class Result extends Action
{
    protected $_resultPageFactory;

    public function __construct(Context $context, 
        PageFactory $resultPageFactory,
        AnswerFactory $answerFactory/*, ObjectManager $objectManager*/)
    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->resultAnswerFactory = $answerFactory;
        // $this->_objectManager = $objectManager;
        parent::__construct($context);
    }


    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        $data = $this->getRequest()->getPost();
        

        $answer = $this->resultAnswerFactory->create();
        $answer->setQuestion1($data['question1']);
        $answer->setQuestion2($data['question2']);

        // $answer->setData('question1', $data['question1']);  

        $msg =""; 

        if($data != ''){ 
            $answer->save(); 
            $msg = 'saved successfully'.$answer->getQuestion1().$answer->getQuestion2();
        }else{ 
             $msg = 'not saved';  
        } 
        echo "<script>console.log('PHP: ".$msg."');</script>" ;
        return $resultPage;
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