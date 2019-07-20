<?php
require("../database/Database.php");
class UserModel{
    public $id;
    public $name;
    public $email;
    public $username;
    public $password;
    private $db;
    private $tablename = "tbluser";

    public function __construct(){
        $this->db = new Database();
    }

    public function insertC5(){
        $sql = "INSERT INTO $this->tablename (id,name,email,username,password) VALUES('$this->name')"; //case #5
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (id,name,email,username,password) VALUES('$this->id','$this->id','$this->email','$this->username', '$this->password')";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    public function update(){
       $sql = "UPDATE tbluser set password = '$this->password' where id = $this->id";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->db->execute($sql);
       
    }

    public function delete(){
        $sql = "DELETE from $this->tablename where id = $this->id";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }

    
    public function __destruct(){
        unset($this->db);
    }
}

?>