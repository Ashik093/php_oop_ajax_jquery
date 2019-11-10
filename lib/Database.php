<?php
    $filepathe=realpath(dirname(__FILE__));
    include_once($filepathe.'/../config/config.php');

    class Database{
      public $host = HOST;
      public $user = USER;
      public $pass = PASSWORD;
      public $db   = DB;

      public $link;
      public $error;

      public function __construct(){
        $this->connectDB();
      }
      private function connectDB(){
        $this->link = new mysqli($this->host,$this->user,$this->pass,$this->db);
        if(!$this->link){
          $this->error="Connection Failed".$this->link->connect_error;
          return false;
        }
      }

      public function select($query){
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows>0){
          return $result;
        }else{
          return false;
        }
      }

      public function insert($query){
        $insert = $this->link->query($query) or die($this->link->error.__LINK__);
        if($insert){
          return $insert;
        }else{
          return false;
        }
      }

      public function update($query){
        $update=$this->link->query($query) or die($this->link->error.__LINE__);
        if($update){
          return $update;
        }else{
          return false;
        }
      }

      public function delete($query){
        $delete=$this->link->query($query) or die($this->link->error.__LINE__);
        if($delete){
          return $delete;
        }else{
          return false;
        }
      }

    }
 ?>
