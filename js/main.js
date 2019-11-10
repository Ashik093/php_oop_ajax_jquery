$(document).ready(function(){

  //check user Available
  $("#username").blur(function(){
    var username=$(this).val();
    $.ajax({
      url:"check/checkuser.php",
      method:"POST",
      data:{username:username},
      dataType:"text",
      success:function(data){
        $("#msg").html(data);
      }
    });
  });

 //autocomplete textbox
 $("#skill").keyup(function(){
   var skill = $(this).val();
   if(skill != ""){
     $.ajax({
       url:"check/autoComplete.php",
       method:"POST",
       data:{skill:skill},
       dataType:"text",
       success:function(data){
         $("#autoComplete").fadeIn();
         $("#autoComplete").html(data);
       }
     });
   }
 });

  $(document).on("click","li",function(){
    $("#skill").val($(this).text());
    $("#autoComplete").fadeOut();
  });

  // show password

  $("#showPassword").on("click",function(){
    var pass = $("#password");
    var fieldType = pass.attr('type');
    if (fieldType == "password"){
      pass.attr('type','text');
      $(this).text('Hide Password');
    }else{
      pass.attr('type','password');
      $(this).text('Show Password');
    }
  });

  // insert data without reload
  $("#autoSubmit").on('click',function(){
    var content = $("#content").val();
    if(content != ''){
      $.ajax({
        url:'check/insert.php',
        method:'POST',
        data:{content:content},
        dataType:"text",
        success:function(data){
          $("#content").val("");
          $("#status").html(data);
        }
      });
    }
    return  false;
  });

  //div refresh without reload
  setInterval(function(){
    $("#data").load('check/select.php').fadeIn();
  },1000);

  // live search

  $("#search").keyup(function(){
    var search = $(this).val();
    if(search != ''){
      $.ajax({
        url:'check/liveSearch.php',
        method:'POST',
        data:{search:search},
        dataType:'text',
        success:function(data){
          $(this).val('');
          $("#serachResult").html(data);
        }
      });
    }else{
      $("#serachResult").html("");
    }
  });

});
