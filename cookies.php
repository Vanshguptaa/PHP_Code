<?php
$cookie_name = "vanshgupta";
$cookie_value = "kumar";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is  set!";

} else {
  echo "Cookie '" . $cookie_name . "' is not set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>



</body>


</html>


