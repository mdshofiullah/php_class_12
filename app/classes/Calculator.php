<?php
namespace App\classes;
use App\classes\User;


class Calculator
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;

    public function __construct($data)
    {
        $this->firstNumber  = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator     = $data['operator'];
    }

    public function index()
    {
        switch ($this->operator)
        {
            case '+':
                echo $this->add();
                break;
            case '-':
                echo $this->sub();
                break;
            case '*':
                echo $this->multiplication();
                break;
            case '/':
                echo $this->division();
                break;
        }
    }

    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;

    }
    protected function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    private function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }

}