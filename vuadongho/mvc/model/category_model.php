<?php
class category_model extends DB {
    public function getAllCategory(){
        $sql = "SELECT * FROM `category`";
        return mysqli_query($this->conn,$sql);
    }
}