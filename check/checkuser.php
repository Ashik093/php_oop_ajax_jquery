<?php
  $filepath=realpath(dirname(__FILE__));
  include_once($filepath.'/../classes/Project.php');
  $pro=new Project();
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];

    if($username==""){
      echo '<div class="alert alert-primary" role="alert">
              Please Enter Username !
              </div>';
    }else{
      $result=$pro->checkuser($username);
      if($result){
        echo '<div class="alert alert-danger" role="alert">
                '.$username.' is not Available !
                </div>';
      }else{
        echo '<div class="alert alert-success" role="alert">
                '.$username.' is  Available !
                </div>';
      }
    }
  }
 ?>
