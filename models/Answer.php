<?php
class Answer {
    private $id;
    private $text;
    private $isCorrect;

    function __construct($t, $correct, $id) {
        $this->text = $t;
        $this->isCorrect = $correct;
        $this->id = $id;
    }

    public function getText() {
        return $this->text;
    }

    public function getId() {
        return $this->id;
    }

    public function getIsCorrect() {
        return $this->isCorrect;
    }
}
?>