<?php
$check=mail("vanshgupta3452391@gmail.com","My subject","Hello world!","From:vanshgupta3452391@gmail.com");
if($check)
{
    echo "Mail sent successfully";
}
else
{
    echo "Mail not sent";
}

?>