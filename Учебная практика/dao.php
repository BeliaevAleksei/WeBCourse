<?php
class DAO
{
    private $link;
    
    public function __construct() {
        $this->link = mysqli_connect("localhost", "dislexsu", "", "Management");  
    }
    
    public function sql_query($sqlString)
    {
       return mysqli_query($this->link, $sqlString); 
    }
    
    
    public function getPulpit() {
        return $this->sql_query("SELECT * FROM FacultyAndPulpit");
    }
    
    public function getTeachers() {
        return $this->sql_query("SELECT * FROM Teachers");
    }
    
    public function getStudents() {
        return $this->sql_query("SELECT * FROM Students");
    }
    
    public function addTeacher($login, $password) {
        $this->sql_query("INSERT INTO `Autorization`(`ID`, `Teacher`, `Password`) VALUES ('','$login','$password')");
    }
    
    public function addTeacherIntable($firstName, $lastName, $pulpit) {
        $this->sql_query("INSERT INTO `Teachers`(`ID`, `FirstName`, `LastName`, `Pulpit`) VALUES ('','$firstName', '$lastName', '$pulpit')");
    }
    
    public function addStudent($firstName, $lastName, $course, $status, $teacher, $pulpit) {
        $this->sql_query("INSERT INTO `Students`(`ID`, `FirstName`, `LastName`, `Course`, `Status`, `Teacher`, `Pulpit`) VALUES ('', '$firstName', '$lastName', '$course', '$status', '$teacher', '$pulpit')");
    }
    
    
    public function addFP($faculty, $pulpit) {
        $this->sql_query("INSERT INTO `FacultyAndPulpit`(`ID`, `Faculty`, `Pulpit`) VALUES ('','$faculty','$pulpit')");
    }
    
    public function deleteFP($id) {
        $this->sql_query("DELETE FROM `FacultyAndPulpit` WHERE ID = '$id' ");
    }
    
    public function deleteT($id) {
        $this->sql_query("DELETE FROM `Teachers` WHERE ID = '$id' ");
    }
    public function updateST($id, $firstName, $lastName, $course, $status, $teacher, $pulpit) {
    $this->sql_query("UPDATE `Students` SET `FirstName`= '$firstName' ,`LastName`='$lastName',`Course`='$course',`Status`='$status',`Teacher`='$teacher',`Pulpit`='$pulpit' 
    WHERE ID = $id");
    }
    
     public function addMessage($login, $mail, $message) {
        $this->sql_query("INSERT INTO `Message`(`ID`, `Login`, `Mail`, `Message`) VALUES ('','$login','$mail', '$message')");
    }
}