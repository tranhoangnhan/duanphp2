<?php
class category_model extends DB {
    public function getAllCategory(){
       $sql = $this->select_all('category');
        return mysqli_query($this->conn,$sql);
        
    }

}