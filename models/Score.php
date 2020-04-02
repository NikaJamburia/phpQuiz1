<?php
    class Score {
        private $userName;
        private $score;

        function __construct($userName, $score) {
            $this->$userName = $userName;
            $this->$score = $score;
        }

        public function getUserName() {
            return $this->$userName;
        }

        public function getScore() {
            return $this->$score;
        }
    }
?>