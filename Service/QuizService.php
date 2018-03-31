<?php

namespace Service;

use Adapter\DatabaseInterface;
use Data\Question;
use Data\Quiz;

class QuizService
{
    private $db;

    /**
     * QuizService constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function showQuiz()
    {
        $query = "SELECT * FROM questions ORDER BY RAND() LIMIT 11";
        $stmt = $this->db->prepare($query);
        $stmt->execute([]);

        while($question = $stmt->fetchObject(Question::class)){
            yield $question;
        }

    }

    public function saveResult($score, $duration, $player)
    {
        $query = "INSERT INTO quizzes SET score = :score, duration = :duration, player = :player";
        $stmt = $this->db->prepare($query);
        $stmt->execute([
             'score' => $score,
             'duration' => $duration,
             'player' => $player
        ]);
    }

    public function getHighestResults(){
        $query = "SELECT * FROM quizzes ORDER BY  score DESC, duration ASC LIMIT 5";
        $stmt = $this->db->prepare($query);
        $stmt->execute([]);

        while($result = $stmt->fetchObject(Quiz::class)){
            yield $result;
        }
    }

}