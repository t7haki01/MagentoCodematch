<?php

namespace Survey\SurveyPage\Api\Data;

interface AnswerInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ANSWER_ID             = 'answer_id';
    const QUESTION1             = 'question1';
    const QUESTION2             = 'question2';
    /**#@-*/


    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get question1
     *
     * @return string|null
     */
    public function getQuestion1();

    /**
     * Get question2
     *
     * @return string|null
     */
    public function getQuestion2();


    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Set question1
     *
     * @param string $question1
     * @return $this
     */
    public function setQuestion1($question1);

    /**
     * Set question2
     *
     * @param string $question2
     * @return $this
     */
    public function setQuestion2($question2);

    
}