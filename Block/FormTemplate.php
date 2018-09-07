<?php

namespace Survey\SurveyPage\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Survey\SurveyPage\Model\ResourceModel\Answer\Collection as PostCollection;
use \Survey\SurveyPage\Model\ResourceModel\Answer\CollectionFactory as PostCollectionFactory;
use \Survey\SurveyPage\Model\Answer;

class FormTemplate extends Template
{

    protected $_postCollectionFactory = null;

    public function __construct(
        Context $context,
        PostCollectionFactory $postCollectionFactory,
        array $data = []
    ) {
        $this->_postCollectionFactory = $postCollectionFactory;
        parent::__construct($context, $data);
    }

  
    public function getAnswers()
    {
        /** @var PostCollection $postCollection */
        $postCollection = $this->_postCollectionFactory->create();
        $postCollection->addFieldToSelect('*')->load();
        return $postCollection->getItems();
    }

    /**
     * For a given post, returns its url
     * @param Post $post
     * @return string
     */
    public function getAnswerUrl(
        Post $post
    ) {
        return '/surveypage/result/id/' . $post->getId();
    }

}