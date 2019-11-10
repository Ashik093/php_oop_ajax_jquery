<?php
  $filepath=realpath(dirname(__FILE__));
  include_once($filepath.'/../lib/Database.php');
  class Project{
    private $db;
    public function __construct(){
      $this->db=new Database();
    }

    public function checkuser($username){
      $query="SELECT * FROM users WHERE username='$username'";
      $check=$this->db->select($query);
      return $check;
    }

    public function autoComplete($skill){
      $query = "SELECT * FROM skills WHERE skill LIKE '%$skill%'";
      $result=$this->db->select($query);
      //return $result;

      $html='';
      $html .='<div><ul class="list-group">';
      if($result){
        while($data = $result->fetch_assoc()){
          $html .= '<li class="list-group-item">'.$data["skill"].'</li>';
        }
      }else{
        $html .= '<li class="list-group-item">No Suggestion</li>';
      }

      $html .='</ul></div>';
      echo $html;
    }

    public function save($content){
      $query = "INSERT INTO posts(details) VALUES('$content')";
      $insert = $this->db->insert($query);
      if($insert){
        return true;
      }
      return false;
    }

    public function getData(){
      $query = "SELECT * FROM posts";
      $data = $this->db->select($query);
      if($data){
        return $data;
      }
      return false;
    }

    public function searchResult($keyword){
      $query = "SELECT * FROM customers WHERE name LIKE '%$keyword%' OR age LIKE '%$keyword%' OR city LIKE '%$keyword%'";
      $result = $this->db->select($query);
      if($result){
        return $result;
      }
      return false;
    }
  }
 ?>
