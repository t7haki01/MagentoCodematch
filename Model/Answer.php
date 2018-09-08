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

    public function getQuestion3()
    {
        return $this->getData(self::QUESTION3);
    }

    public function getProduct()
    {
        return $this->getData(self::PRODUCT);
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

    public function setQuestion3($question3)
    {
        return $this->setData(self::QUESTION3, $question3);
    }

    public function setProduct($product)
    {
        return $this->setData(self::PRODUCT, $product);
    }

   public function getIdentities()
   {
       return [self::CACHE_TAG . '_' . $this->getId()];
   }

}