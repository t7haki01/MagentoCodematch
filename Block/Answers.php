<?php

namespace Survey\SurveyPage\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Survey\SurveyPage\Model\ResourceModel\Answer\Collection as PostCollection;
use \Survey\SurveyPage\Model\ResourceModel\Answer\CollectionFactory as PostCollectionFactory;
use \Survey\SurveyPage\Model\Answer;

class Answers extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_postCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param PostCollectionFactory $postCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        PostCollectionFactory $postCollectionFactory,
        array $data = []
    ) {
        $this->_postCollectionFactory = $postCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Post[]
     */
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
        return 'survey/surveypage/result/' . $post->getId();
    }

}