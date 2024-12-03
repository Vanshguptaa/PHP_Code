<!-- multi array -->
 <?php
// $cars = array(
//   array("Volvo",22,18),
//   array("BMW",15,13),
//   array("Saab",5,2),
//   array("Land Rover",17,15)
// );

// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";

// here we are using array_chunk() function to split the array into chunks of two elements each.

// $courses=array("php","java","c++","c#","nodejs","html");
// print_r(array_chunk($courses,2));




// here we are using array_flip() function to flip the key and value of the array.

// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// print_r(array_flip($a));


//here we are using array_reverse() function to reverse the order of the elements in the array.

// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// print_r(array_reverse($a));



//here we are using array_search() function to search the value of "red" in the array.

// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_search("red",$a);



//here we are using array_push() function to remove the duplicate values from the array.
// $a=array("a"=>"red","b"=>"green","c"=>"red");
// $result=array_push($a,"blue");
// print_r($a);



//here we are using array_slice() function to remove the last element from the array.

// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,0,3));

//here we are using array_diff() function to remove the last element from the array.

// $a=array("red","green","blue","yellow","brown");
// $b=array("red","green","blue");
// $result=array_diff($a,$b);
// print_r($result);


//here we are using array_intersect() function to remove the last element from the array.

$a=array("a"=>"red","b"=>"green","c"=>"blue");
$b=array("a"=>"red","b"=>"green","c"=>"blue");
$result=array_intersect($a,$b);
print_r($result);



?>




 


