<?php include_once('inc/header.php'); ?>
<?php include_once('inc/navbar.php'); ?>
<?php include_once('inc/session.php'); ?>
<div class="container">
	<div class="col-md-6 mx-auto" id="content_form">
	<h5 class="text-center text-white">Add New Content</h5>
	<div class="form-group">
		<label>Content Title</label>
		<input type="text" name="content_title" id="content_title" class="form-control" placeholder="Enter Content Title">
		<label>Description:</label>
		<textarea name="content" class="form-control" id="content" cols="10" rows="5" placeholder="Enter Description"></textarea>
		<br>
		<button type="button" id="insert" class="btn btn-warning text-center">Insert</button>

	</div>	
	</div>

	<div class="col-md-4 mx-auto mt-5" id="alert_box">
    <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Failed!</strong>Failed To Insert Data.
</div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		$("#alert_box").hide();

		$(document).on("click","#insert",function(){
			var content_title = $("#content_title").val();
			var content = $("#content").val();
			if(content_title == ""){
				$("#content_title").focus();
          $("#content_title").css('border-color','red');
          return false;

        }
        if(content == ""){
        	$("#content_title").focus();
         $("#content").css('border-color','red');
          return false;

        }
        var data = {"content_title":content_title,"content":content }

        $.ajax({
        	type:'POST',
        	url:'insert_content_sub.php',
        	data:data,
        	success:function(res){
        		if(res == "Inserted"){
        			window.location.href = "dashboard.php";

        		}
        		if(res == "failed"){
                //showing alertbox
                $("#alert_box").show();
              }
        	}

        });


		});
	});
</script>
