<?php
include_once("conn/config.php");

if(isset($_POST['register'])){

  $img_title = mysqli_real_escape_string($conn,$_POST['img_title']);

$file_name_all = "";
for($i=0; $i<count($_FILES['slider_img']['name']); $i++) 
    {
        $tmpFilePath = $_FILES['slider_img']['tmp_name'][$i];    
        if ($tmpFilePath != "")
        {    
           $path = "Uploads/"; // create folder 
           $name = $_FILES['slider_img']['name'][$i];
           $size = $_FILES['slider_img']['size'][$i];

           list($txt, $ext) = explode(".", $name);
           $file= time().substr(str_replace(" ", "_", $txt), 0);
           $info = pathinfo($file);
           $filename = $file.".".$ext;
           if(move_uploaded_file($_FILES['slider_img']['tmp_name'][$i], $path.$filename)) 
           { 
              $file_name_all.= $filename."*";
           }
       }
       $file = "Uploads/" . $filename ;

       /*print_r($_FILES);
       die;*/
    


$insert_Sliderimg = $conn->prepare("INSERT INTO slider(`img_title`, `slider_img`) VALUES (?,?)");
$insert_Sliderimg->bind_param('ss',$img_title,$file);
if($insert_Sliderimg->execute())
            {
              //echo "Inserted";
              header("location:dashboard.php");
          }
          else{
            echo"error";
          }
   }
    }
       ?>