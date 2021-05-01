<?php

class Student
{
    public $name;
    public $age;
    public $address;
    public $grade;

    //unang irrun ni class paginistantiate yung Student
    function __construct($name, $age, $address, $grade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->grade = $grade;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_full_student_info()
    {
        return "The student name is ". $this->name." ".$this->age." years old"; 
    }

}

//access modifier (public and private)