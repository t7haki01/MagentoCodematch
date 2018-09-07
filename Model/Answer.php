<?php

namespace Survey\SurveyPage\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Survey\SurveyPage\Api\Data\AnswerInterface;

/**
 * Class File
 * @package Survey\SurveyPage\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Answer extends AbstractModel implements AnswerInterface, IdentityInterface
{
 
    const CACHE_TAG = 'survey_results';

    protected function _construct()
    {
        $this->_init('Survey\SurveyPage\Model\ResourceModel\Answer');
    }



    public function getId()
    {
        return $this->getData(self::ANSWER_ID);
    }


    public function getQuestion1()
    {
        return $this->getData(self::QUESTION1);
    }


    public function getQuestion2()
    {
        return $this->getData(self::QUESTION2);
    }



    public function setId($AnswerId)
    {
        return $this->setData(self::ANSWER_ID, $AnswerId);
    }


    public function setQuestion1($question1)
    {
        return $this->setData(self::QUESTION1, $question1);
    }


    public function setQuestion2($question2)
    {
        return $this->setData(self::QUESTION2, $question2);
    }

   public function getIdentities()
   {
       return [self::CACHE_TAG . '_' . $this->getId()];
   }

}