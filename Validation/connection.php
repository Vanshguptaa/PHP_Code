
<?php
$host="localhost";
$user="root";
$pass="";
$db="Validation";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn){
    echo "Ok";
}
else{
    echo "Db not create";
}

?>

