<?php
include 'db.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>check appointmennt</title>
</head>
<body>
<table border="2">
            <tr>
                <th>id</th>
                <th>patient_type</th>
                <th>doc_name</th>
                <th>date</th>
              </tr>
<?php
    $sql="SELECT * FROM `appointmennt`";       
    $fetch=mysqli_query($conn,$sql);
    $i=1;
    while($row=mysqli_fetch_assoc($fetch)){
        $db_id=$row['id'];
        $db_patient_name=$row['patient_name'];
        $db_doc_name=$row['doc_name'];
        $db_date=$row['date'];
        echo"<tr>";
        echo"<td>$i</td>";
        echo"<td>$db_patient_name</td>";
        echo"<td>$db_doc_name</td>";
        echo"<td>$db_date</td>";
       
        echo"</tr>";
        $i++;
    }
    ?>
</body>
</html>