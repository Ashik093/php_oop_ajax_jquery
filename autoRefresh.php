<?php
  include 'inc/header.php';
 ?>

 <div class="row mt-4">
   <div class="col-md-4"></div>
   <div class="col-md-4">
     <form action="" method="POST">
     <div class="form-group">
       <label for="username">Content</label>
       <textarea class="form-control" name="content" id="content"></textarea>
       <button type="button" class="btn btn-sm btn-primary mt-2" name="autoSubmit" id="autoSubmit">POST</button>
     </div>
    </form>
    <div id="status"></div>
   </div>

 </div>
 <div class="row">
   <div class="col-md-4"></div>
   <div class="col-md-4" id="data">

   </div>
 </div>

 <?php include('inc/footer.php') ?>
