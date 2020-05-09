<?php include_once('inc/header.php'); ?>
<?php include_once('inc/navbar.php'); ?>
<?php include_once('inc/session.php'); ?>
<div class="container" style="background-color: lightgrey;">
	<div class="row">
		<div class="col-md-6 mx-auto" style="margin-top: 100px;">
			<form action="inser_slides_sub.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name="img_title" id="img_title" class="form-control" placeholder="Enter Title">
					<br>
					<input type="file" name="slider_img[]" id="slider_img" class="form-control" value = "" accept="image/x-png,image/jpeg" multiple="multiple">
				</div>
				<input type="submit" name="register" class="btn btn-primary" value="Insert" id="register" />
			</form>
		</div>
	</div>
</div>