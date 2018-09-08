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
    const QUESTION3             = 'question3';
    const PRODUCT               = 'product';
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

    public function getQuestion3();
    
    public function getProduct();


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

    public function setQuestion3($question3);

    public function setProduct($product);

    
}