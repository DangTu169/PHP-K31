<?php
    class student{
        var $name;
        var $gender;
        var $birthday;
        var $address;
        function setStudentName($value)
        {
            $this->name = $value;
        }
        function getStudentName()
        {
            return $this->name;
        }
    
        function setStudentGender($value)
        {
            $this->gender = $value;
        }
        function getStudentGender()
        {
            return $this->gender;
        }
    
        function setbirthday($value)
        {
            $this->birthday = $value;
        }
        function getbirthday()
        {
            return $this->birthday;
        }
    
        function setStudentAddress($value)
        {
            $this->address = $value;
        }
        function getStudentAddress()
        {
            return $this->address;
        }
    }
?>