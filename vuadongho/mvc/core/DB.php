<?php
class DB {
    public $conn;
    protected $server = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'vuadongho';

    function __construct(){
        $this->conn = mysqli_connect($this->server, $this->username, $this->password);
        mysqli_select_db($this->conn,$this->dbname);
        mysqli_query($this->conn,"SET NAMES 'utf8'");
    } 
    
    function execute($sql) {
        $query =  mysqli_query($this->conn,$sql);
        return $query;
    }
   
    function select_all($table) {
        $sql = "SELECT * FROM $table";
        
        return $sql;

         }
        

    function select_filter($filter,$table) {
        $sql = "SELECT $filter FROM $table";
        return $sql;
        }
    function update_filter($table,$filter,$condition) {
        $sql = "UPDATE $table SET $filter WHERE $condition";
        return $sql;
        }
    function add_filter($table,$filter,$value) {
        $sql = "INSERT INTO $table($filter) VALUES ($value); ";
        return $sql;
        }
    function delete_filter($table,$condition) {
        $sql = "DELETE FROM $table WHERE $condition";
        return $sql;
        }
    function count($condition,$table) {
        $sql = "SELECT COUNT($condition) as `count` FROM $table";
        return $sql;
        }
    
}

