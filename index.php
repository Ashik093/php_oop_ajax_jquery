<?php
  include 'inc/header.php';
 ?>
<div class="row ">
  <div class="col-md-2"></div>
  <div class="col-md-7">
    <div class="list-group mt-5">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><b>I have done this :</b></a>
      <a href="userNameAvailability.php" class="list-group-item list-group-item-action"> <b>1.</b> User Name Availability Without Reload</a>
      <a href="autoComplete.php" class="list-group-item list-group-item-action"> <b>2.</b> AutoComplete Text Box</a>
      <a href="showPassword.php" class="list-group-item list-group-item-action"> <b>3.</b> Show Password/Hide Password</a>
      <a href="autoRefresh.php" class="list-group-item list-group-item-action"> <b>4.</b> Auto Refresh (Data Insert And Select Without Reload)</a>
      <a href="search.php" class="list-group-item list-group-item-action"> <b>5.</b> Live Search Without Reload</a>
    </div>
  </div>
</div>

 <?php include('inc/footer.php') ?>
