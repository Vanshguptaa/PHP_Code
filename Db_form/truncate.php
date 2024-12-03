<?php
include 'connection.php';
$sql="TRUNCATE TABLE Labor";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Data Truncated";
}
else{
    echo "Data not Truncated";
}




?>