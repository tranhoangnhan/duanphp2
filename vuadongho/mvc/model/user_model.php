<?php
class user_model extends DB {
    public function getAllUser(){
        $sql = "SELECT * FROM `account`";
        return mysqli_query($this->conn,$sql);
    }

    public function getUserbyId($id_account){
        $sql = "SELECT * FROM `account` WHERE id_account = $id_account";
        return mysqli_query($this->conn,$sql);

    }
    public function getUserbyEmail($email){
        $sql = "SELECT * FROM `account` WHERE iemail = $email";
        return mysqli_query($this->conn,$sql);

    }
    public function getPreUser($id_account){
        $sql ="SELECT role FROM `account` WHERE id_account = $id_account";
        return mysqli_query($this->conn,$sql);

    }
    public function regUser($username,$password,$fullname,$birthday,$address,$email,$phone,$avatar) {
        $sql ="INSERT INTO `account`( `username`, 
        `password`, `role`, `status`, `fullname`, `birthday`,
         `address`, `email`, `phone`, `avatar`) 
         VALUES ('$username','$password',3,
         1,'$fullname','$birthday','$address','$email','$phone','$avatar')";
        return mysqli_query($this->conn,$sql);


    }

}