
<form method="POST" action="">
    <?php
        include "db.php";
        if($_GET['edit']){
            $edit_id=$_GET['edit'];
            $sql="SELECT * FROM `doctor` WHERE id=$edit_id";
            $edit_data=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($edit_data))
            {
                $db_doc_name=$row['doc_name'];
                $db_doc_type=$row['doc_type'];
                echo "<input type='text' name='edit_doc_name' value='$db_doc_name'><br>";
                echo "<input type='text' name='edit_doc_type' value='$db_doc_type'><br>";
            }
        }
    ?>
    
    </form>
    <?php
    if(isset($_POST['update'])){
        $edit_doc_name=$_POST['edit_doc_name'];
        $edit_doc_type=$_POST['edit_doc_type'];
        $sql="UPDATE `doctor` SET `doc_name` = ' $edit_doc_name', `doc_type` = '$edit_doc_type' WHERE `doctor`.`id` = $edit_id";
        $edit_insert=mysqli_query($conn,$sql);
        header("location:doctor.php");
    }
    ?>
