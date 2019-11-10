<?php
  $filepath = realpath(dirname(__FILE__));
  include_once($filepath.'/../classes/Project.php');

  $pro= new Project();
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $keyword = $_POST['search'];
    $getResult = $pro->searchResult($keyword);
    $table = '';
    if ($getResult){
      $table .='<table class="table table-striped mt-4">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Age</th>
                      <th scope="col">City</th>
                    </tr>
                  </thead>
                  <tbody>';
      while($data = $getResult->fetch_assoc()){
        $table .='<tr>
                    <td>'.$data["name"].'</td>
                    <td>'.$data["age"].'</td>
                    <td>'.$data["city"].'</td>
                  </tr>';
      }
      $table .= ' </tbody></table>';
    }else{
      $table = '<div class="alert alert-warning mt-4" role="alert">
                  No Result Found !
                </div>';
    }


    echo $table;
  }
 ?>
