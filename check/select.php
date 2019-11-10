<?php
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../classes/Project.php');

    $pro = new Project();
    $select = $pro->getData();
    $table='';
    $table .= '<table class="table table-hover table-border table-success">
                 <thead class="thead-light">
                   <tr>
                     <th scope="col">SL</th>
                     <th scope="col">Details</th>
                   </tr>
                 </thead>
                 <tbody>';
    if($select){
      $i=0;
      while($data = $select->fetch_assoc()){
        $table .= '<tr>
                    <th scope="row">'.++$i.'</th>
                    <td>'.$data['details'].'</td>
                  </tr>';
      }
    }else{
      $table .= '<tr>
                  No Data Found !
                </tr>';
    }
    $table .= '</tbody></table>';
    echo $table;;
 ?>
