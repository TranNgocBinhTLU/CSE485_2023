<?php
class Student {
    private $name;
    private $id;
    private $age;
    private $grade;
  
    public function __construct($name, $id, $age, $grade) {
      $this->name = $name;
      $this->id = $id;
      $this->class = $age;
      $this->address = $grade;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getAge() {
      return $this->age;
    }
  
    public function getGrade() {
      return $this->grade;
    }
  
    public function setName($name) {
      $this->name = $name;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function setAge($age) {
      $this->age = $age;
    }
  
    public function setGrade($grade) {
      $this->grade = $grade;
    }
  }
?>