<?php 
include_once('conn/config.php');

$content_title = $_POST['content_title'];
$content = $_POST['content']; 

$insert_Content = $conn->prepare("INSERT INTO `content`(`content_title`, `content`) VALUES (?,?)");
$insert_Content->bind_param('ss',$content_title,$content);
if($insert_Content->execute())
            {
              echo "Inserted";
              
          }
          else{
            echo "failed";
          }


?>