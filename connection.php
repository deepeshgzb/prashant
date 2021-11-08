<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"prashant");


if ($link)
{
    
}
else
{
    echo "disconnected";
}
?>
