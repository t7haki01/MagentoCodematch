<?php

namespace Survey\SurveyPage\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Answer extends AbstractDb
{
    /**
     * Post Abstract Resource Constructor
     * @return void
     */
    protected function __construct()
    {
        $this->_init('survey_answer', 'answer_id');
    }
}