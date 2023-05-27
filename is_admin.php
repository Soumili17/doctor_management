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
    <title>is_admin Page</title>
</head>
<body>
<div class="center">
            <form method="POST" action="">
                
                    <input type="text" name="admin_name" placeholder="admin_name"><br><br>
                    <input type="text" name="admin_password" placeholder="admin_password"><br><br>
                    <button name="login"> Login here </button>
            </form>
        </div>
        <?php
        if(isset($_POST['login']))
        {
            
            echo $admin_name=$_POST['admin_name'];
            echo $admin_password=$_POST['admin_password'];
           
            $sql="INSERT INTO `admin`(`admin_name`,`admin_password`) VALUES ('$admin_name','$admin_password')";
            $insert=mysqli_query($conn,$sql);
            if($insert){
                echo "<script type='text/javascript'>alert('insertion done!!!');</script>";
            }
            else{
                echo"useless";
            }
        }
    ?>
    <table border="2">
            <tr>
                <th>id</th>
                <th>admin_name</th>
                <th>admin_password</th>
              </tr>
            <?php
                 $sql="SELECT * FROM `admin`";      
                 $fetch=mysqli_query($conn,$sql);
                 $i=1;
                 while($row=mysqli_fetch_assoc($fetch)){
                     $db_id=$row['id'];
                     $db_admin_name=$row['admin_name'];
                     $db_admin_password=$row['admin_password'];
                     echo"<tr>";
                     echo"<td>$i</td>";
                     echo"<td>$db_admin_name</td>";
                     echo"<td>$db_admin_password</td>";
                     $i++;
             }
            ?>
</table>
    </body>
    </html>