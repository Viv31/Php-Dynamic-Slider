<?php 
include_once('conn/config.php');
$username = $_POST['username'];
$admin_password = md5($_POST['admin_password']);

    $stmt = $conn->prepare("SELECT id,username, admin_password FROM admin WHERE  username=? AND admin_password = ? ");
    $stmt->bind_param('ss',$username, $admin_password);
    $stmt->execute();
    $stmt->bind_result($id, $username, $admin_password);
    $stmt->store_result();
    if($stmt->num_rows > 0)  //To check if the row exists
        {
        $stmt->fetch();
        echo 'Login'; //for sending response in ajax field so redirect to dashboard
         $_SESSION['username'] = $username;
         $_SESSION['userid'] = $id;

            //header("location:dashboard.php");
           

    }
    else {
        echo "login failed";
        
    }
    $stmt->close();


?>