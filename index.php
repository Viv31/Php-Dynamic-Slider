<?php include_once('inc/header.php');?>
<?php include_once('inc/main_header.php'); ?>
<?php include_once('inc/navbar.php');?>
<?php 
$get_all_images = "SELECT * FROM slider";
$res = mysqli_query($conn,$get_all_images);

$rowCount = mysqli_num_rows($res);



?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
    for($i=1;$i<= $rowCount;$i++){
       $row = mysqli_fetch_array($res);
      ?>
      <?php 
      if($i==1){
        ?>
<div class="carousel-item active">
      <img class="d-block w-100" height="500" src="Admin/<?php echo $row['slider_img']; ?>" alt="First slide">
    </div>

    <?php
      }
      else{
        ?>
            <div class="carousel-item">
      <img class="d-block w-100" height="500" src="Admin/<?php echo $row['slider_img']; ?>" alt="First slide">
    </div>
      <?php
      }


      ?>
      

      <?php

    }

     ?>

    
    
    
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container-fluid">
	
	<div class="container">
		
		<div class="row bg-dark" style="margin-bottom: 100px;">
			<div class="col-md-12" id="myaccordian_div">
				<h3 class="text-primary text-center text-uppercase">Table of Content</h3>
			</div>
			<div class="col-md-10 mx-auto">
				<div id="accordion">
<?php


$view_apt_data = $conn->prepare("SELECT `id`, `content_title`, `content` FROM `content`");

$view_apt_data->execute();
$view_apt_data->bind_result($id,$content_title, $content);
$i=1;
while ($view_apt_data ->fetch()) {
    
  ?>
<div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseOne">
         <?php echo $content_title; ?>
        </button>
      </h5>
    </div>

    <div id="collapseOne<?php echo $i; ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <?php echo $content_title; ?>
      </div>
    </div>
  </div>
  <?php
    $i++;

  }
?>

  
  
</div>
<br>
			</div>

			
		</div>
<br><br>
		<div class="row bg-primary">
			<div class="col-md-12">
				<h3 class="text-center">TITLE</h3>
			</div>
			<div class="col-md-10 mx-auto mt-50">
				<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
			</div>
			<div class="col-md-10 mx-auto">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div id="accordion" style="margin-bottom: 150px;">
  <?php


$view_apt_data = $conn->prepare("SELECT `id`, `content_title`, `content` FROM `content`");

$view_apt_data->execute();
$view_apt_data->bind_result($id,$content_title, $content);
$j=1;
while ($view_apt_data ->fetch()) {
    
  ?>
<div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne<?php echo $j; ?>" aria-expanded="false" aria-controls="collapseOne">
         <?php echo $content_title; ?>
        </button>
      </h5>
    </div>

    <div id="collapseOne<?php echo $j; ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <?php echo $content_title; ?>
      </div>
    </div>
  </div>
  <?php
    $j++;

  }
?>
 
  
</div>
<br>
			</div>

			
			

		</div>
		<div class="row bg-success" id = "states">
			<div class="col-md-12">
				<h6 class="mt-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</h6>
				<p class="mt-1 text-center">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
				<div class="col-md-3 states_div">
					<h1>150</h1>
					<span>sed do eiusmod</span>
				</div>
				<div class="col-md-3 states_div">
					<h1>150</h1>
					<span>sed do eiusmod</span>
				</div>
				<div class="col-md-3 states_div">
					<h1>150</h1>
					<span>sed do eiusmod</span>
				</div>
				<div class="col-md-3 states_div">
					<h1>150</h1>
					<span>sed do eiusmod</span>
				</div>
				<div class="col-md-3 states_div">
					<h1>150</h1>
					<span>sed do eiusmod</span>
				</div>
				<div class="col-md-3 states_div">
					<h1>150</h1>
					<span>sed do eiusmod</span>
				</div>
				<div class="col-md-3 states_div">
					<h1>150</h1>
					<span>sed do eiusmod</span>
				</div>
				<div class="col-md-3 states_div">
					<h1>150</h1>
					<span>sed do eiusmod</span>
				</div>

				
			</div>
			<div class="col-md-12">
					<div class="col-md-4">
						<h1>52,0000</h1>
						<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
					</div>
					<div class="col-md-8">
						
					</div>
				</div>
	</div>
</div>

<?php include_once('inc/footer.php');?>
<!-- <script type="text/javascript">
  $(document).ready(function(){
var replaced = $("#slider_image").html().replace('../','');
$("#slider_image").html(replaced);

  })
</script> -->