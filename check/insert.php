<?php
  $filepath = realpath(dirname(__FILE__));
  include_once($filepath.'/../classes/Project.php');
  $pro =new Project();
  if ($_SERVER['REQUEST_METHOD']=="POST") {
    $content = $_POST['content'];
    $save=$pro->save($content);
    if($save){
      echo '<div class="alert alert-primary" role="alert">
              Data inserted successfully!
            </div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">
              Data inserted fail!
            </div>';
    }
  }
 ?>
