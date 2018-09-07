<?php

namespace Survey\SurveyPage\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Survey\SurveyPage\Api\Data\PostInterface;

/**
 * Class File
 * @package Survey\SurveyPage\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Answer extends AbstractModel implements AnswerInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'survey_answer';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Survey\SurveyPage\Model\ResourceModel\Answer');
    }


    /**
     * Get AnswerID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ANSWER_ID);
    }

    /**
     * Get question1
     *
     * @return string|null
     */
    public function getQuestion1()
    {
        return $this->getData(self::QUESTION1);
    }

    /**
     * Get question2
     *
     * @return string|null
     */
    public function getQuestion2()
    {
        return $this->getData(self::QUESTION2);
    }



    /**
     * Set AnswerID
     *
     * @param string $AnswerId
     * @return $this
     */
    public function setId($AnswerId)
    {
        return $this->setData(self::ANSWER_ID, $AnswerId);
    }

    /**
     * Set question1
     *
     * @param string $content
     * @return $this
     */
    public function setQuestion1($question1)
    {
        return $this->setData(self::QUESTION1, $question1);
    }

    /**
     * Set questtion2
     *
     * @param string $Question2
     * @return $this
     */
    public function setQuestion2($Question2)
    {
        return $this->setData(self::QUESTION2, $question2);
    }
}