
<?php
$host="localhost";
$user="root";
$pass="";
$db="Reservation";
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn){
    echo "Ok";
}
else{
    echo "Db not create";
}

?>

