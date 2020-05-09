<?php 
 session_start();
if(isset($_SESSION['username'])){

  header('location:index.php');
    session_destroy();

}
include_once('inc/header.php');
?>
<div class="container-fluid" id="admin_login_form">
  <div class="row">
   
    <div class="col-md-4  mx-auto" id="form_container" style="margin-top: 200px;">
      <div class="form-group">
        <label>Username:</label>
        <input type="email" name="username" id="username" class="form-control" placeholder="enter username">
      </div>
       <div class="form-group">
        <label>Password:</label>
        <input type="password" name="admin_password" id="admin_password" class="form-control" placeholder="enter Password">
        <input type="checkbox"  onclick="ShowPass();"><span style="color: white;">Show Password</span>
      </div>
      <button class="btn btn-info" id="login">Login</button>
      <a href="forget_password.php">Forget Password</a>
    </div>
    
  </div>
  
    <div class="col-md-4 mx-auto mt-5" id="alert_box">
    <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Failed!</strong>Please Provide Correct Login Details.
</div>
  </div>

  
</div>


<?php include_once('inc/footer.php'); ?>
<script type="text/javascript">
  $(document).ready(function(){
//hiding alert box
$("#alert_box").hide();

    $(document).on("click","#login",function(){
       var username = $("#username").val();
        var admin_password = $("#admin_password").val();
        if(username == ""){
          alert("enter email");
          return false;

        }
        if(admin_password == ""){
          alert("enter Password");
          return false;

        }
        var data = {"username":username,"admin_password":admin_password}

        $.ajax({

           type : 'POST',
            url  : 'login_sub.php',
            data : data,
            success : function(res){
              if(res == "Login"){
                window.location.href = "dashboard.php";
              }
              if(res == "login failed"){
                //showing alertbox
                $("#alert_box").show();
              }
              
            
            }
        });

  });
});

  function ShowPass(){
    var x = document.getElementById("admin_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>