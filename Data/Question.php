<?php
/**
 * Created by PhpStorm.
 * User: hrist
 * Date: 3/30/2018
 * Time: 2:34 PM
 */

namespace Data;


class Question
{
    private $id;
    private $question;
    private $answer;
    private $answer_2;
    private $answer_correct;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * @return mixed
     */
    public function getAnswer2()
    {
        return $this->answer_2;
    }

    /**
     * @param mixed $answer_2
     */
    public function setAnswer2($answer_2)
    {
        $this->answer_2 = $answer_2;
    }

    /**
     * @return mixed
     */
    public function getAnswerCorrect()
    {
        return $this->answer_correct;
    }

    /**
     * @param mixed $answer_correct
     */
    public function setAnswerCorrect($answer_correct)
    {
        $this->answer_correct = $answer_correct;
    }
}