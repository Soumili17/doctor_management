<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Page</title>
</head>
<body>
<div class="center">
            <form method="POST" action="">
                <input type="text" name="doc_name" placeholder="doc_name"><br><br>
                <input type="text" name="doc_type" placeholder="doc_type"><br><br>
                <button name="login">Submit</button>
                <br>
            </form>
        </div>
        <?php
        if(isset($_POST['login']))
        {
            echo $doc_name=$_POST['doc_name'];
            echo $doc_type=$_POST['doc_type'];
           
            $sql="INSERT INTO `doctor`(`doc_name`,`doc_type`) VALUES ('$doc_name','$doc_type')";
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
                <th>doc_name</th>
                <th>doc_type</th>
              </tr>
<?php
    $sql="SELECT * FROM `doctor`";       
    $fetch=mysqli_query($conn,$sql);
    $i=1;
    while($row=mysqli_fetch_assoc($fetch)){
        $db_id=$row['id'];
        $db_doc_name=$row['doc_name'];
        $db_doc_type=$row['doc_type'];
        echo"<tr>";
        echo"<td>$i</td>";
        echo"<td>$db_doc_name</td>";
        echo"<td>$db_doc_type</td>";
        echo"<td><a href='edit.php?edit=$db_id'>Update</a></td>";
        echo"<td><a href='delete.php?delete=$db_id'>Delete</a></td>";
        echo"</tr>";
        $i++;
    }
    ?>
</table>
</body>
</html> 