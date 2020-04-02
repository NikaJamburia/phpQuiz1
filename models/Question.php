<?php
require_once('Answer.php');
class Question {
    private $id;
    private $text;
    private $answer1;
    private $answer2;

    function __construct($t, $a1, $a2, $id) {
        $this->text = $t;
        $this->answer1 = $a1;
        $this->answer2 = $a2;
        $this->id = $id;
    }

    public function getText() {
        return $this->text;
    }

    public function getAnswer1() {
        return $this->answer1;
    }

    public function getAnswer2() {
        return $this->answer2;
    }

    public function getId() {
        return $this->id;
    }
    
}
?>