<?php


$conn = mysqli_connect("localhost","root","root","usermm");

@ mysqli_set_charset($conn,utf8);

@mysqli_query($conn,utf8);

if(mysqli_connect_errno($conn))
{
    echo "连接MySql数据库失败".mysqli_connect_error()."<br>";
}

?>
