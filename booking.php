<?php
include "db.php";
echo "<br>";
?>
<html>
    <head>
        <title>Fetch</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head> 
    <body>
    <div>
        <form action="" method="post">
        <input type="text" name="patient_name" placeholder="patient_name"><br><br>
        <select name='doc_name'> 
             <option value="select">Select the doctor</option> 
        <?php 
            $sql='select * from `doctor`';
            $fetch= mysqli_query($conn, $sql);
            while ($row= mysqli_fetch_assoc($fetch)) {
                
            
        ?>
            <option value='<?php echo $row['doc_name'] ?>'><?php echo $row['doc_name']. "[".$row['doc_type'].']'  ?></option>   
            <?php } ?>
        </select>
           
        <input type="date" name='date'>
        <br>
        <br>
        <button name="submit">book appointment</button>
        </form>
        
    </div>
    <?php
     if(isset($_POST['submit']))
        {
            echo $patient_name=$_POST['patient_name'];
            echo $doc_name=$_POST['doc_name'];
            echo $date=$_POST['date'];
            
           
            $sql="INSERT INTO `appointmennt`(`patient_name`,`doc_name`,`date`) VALUES ('$patient_name','$doc_name','$date')";
            $insert=mysqli_query($conn,$sql);
            if($insert){
                echo "<script type='text/javascript'>alert('appointmennt done!!!');</script>";
                // die();
            }
            else{
                echo"useless";
            }
        }
        ?>
        
</table>
</body>
</html>