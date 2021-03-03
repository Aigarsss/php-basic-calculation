<?php

Class Calculator {

    private $num1;
    private $num2;
    private $oper;

    function __construct($num1, $num2, $oper) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->oper = $oper;
    }

    public function calculate() {

        switch ($this->oper) {
            case "plus":
                echo $this->num1 + $this->num2;
                break;        
            case "minus":
                echo $this->num1 - $this->num2;
                break;
            case "times":
                echo $this->num1 * $this->num2;
                break;
            case "divide":
                echo $this->num1 / $this->num2;
                break;
            default:
                echo "error";
                break;
        }
    }

}
