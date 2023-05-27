<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Admin Login Page</title>
</head>
<body>
<div class="center">
            <form method="POST" action="">
                
                    <input type="text" name="admin_name" placeholder="admin_name" value='null'><br><br>
                    <input type="text" name="admin_password" placeholder="admin_password"><br><br>
                    <button name="login">login</button>
            </form>
        </div>
        <?php
        session_start();
        if(isset($_POST['login']))
        {
        echo $admin_name=$_POST['admin_name'];
        echo $admin_password=$_POST['admin_password'];
        $sql="SELECT * FROM `admin` WHERE `admin`.`admin_name`='$admin_name'";
        $login=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($login)){
            echo $db_admin_name=$row['admin_name'];
            echo $db_admin_password=$row['admin_password'];
        }
        if(($admin_name==$db_admin_name)&&( $admin_password==$db_admin_password)){
            // $_SESSION['admin_name']=$admin_name;
            header("location:admin.php");
        }
        else{
            echo "name and password does not matched";
        }
        }
        session_destroy();
        ?>
</body>
</html>
