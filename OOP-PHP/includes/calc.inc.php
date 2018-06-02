<?php

class Calc {

    public $num1;
    public $num2;
    public $cal;

    public function __construct($num1, $num2, $cal)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->cal = $cal;
    }

    public function calculate(){
        switch ($this->cal){
            case 'add':
                $this->add();
                break;
            case 'subtract':
                $this->subtract();
                break;
            case 'multiply':
                $this->multiply();
                break;
            default:
                echo "Error";
        }
    }

    public function add(){
        return $this->num1 + $this->num2;
    }

    public function subtract(){
        return $this->num1 - $this->num2;
    }

    public function multiply(){
        return $this->num1 * $this->num2;
    }



}