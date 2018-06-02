<?php
    class Users {
        public $first;
        public $last;
        public $hairColor;
        public $eyeColor;

        public function __construct($first, $last, $hairColor, $eyeColor)
        {
            $this->first = $first;
            $this->last = $last;
            $this->hairColor = $hairColor;
            $this->eyeColor = $eyeColor;
        }

        public function __destruct()
        {
            // TODO: Implement __destruct() method.
        }

        public function fullName() {
            return $this->first." ".$this->last;
        }
    }

?>