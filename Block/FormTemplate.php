<?php

namespace Survey\SurveyPage\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Survey\SurveyPage\Model\ResourceModel\Answer\Collection as AnswerCollection;
use \Survey\SurveyPage\Model\ResourceModel\Answer\CollectionFactory as AnswerCollectionFactory;
use \Survey\SurveyPage\Model\Answer;

class FormTemplate extends Template
{

    protected $_answerCollectionFactory = null;

    public function __construct(
        Context $context,
        AnswerCollectionFactory $answerCollectionFactory,
        array $data = []
    ) {
        $this->_answerCollectionFactory = $answerCollectionFactory;
        parent::__construct($context, $data);
    }

  
    public function getAnswers()
    {
        $answerCollection = $this->_answerCollectionFactory->create();
        $answerCollection->addFieldToSelect('*')->load();
        return $answerCollection->getItems();
    }

    /**
     * For a given post, returns its url
     * @param Post $post
     * @return string
     */
    public function getAnswerUrl(
        Answer $answer
    ) {
        return '/survey/index/result/' . $answer->getId();
    }

}