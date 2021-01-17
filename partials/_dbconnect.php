<?php
mysqli_connect("localhost","root","","users");

if(mysqli_connect_error())
{
    echo "cannot connect";
}
else{
    echo "connected";
}
?>