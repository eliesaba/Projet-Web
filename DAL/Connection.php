<?php

function OpenConn()
{
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname= "mydb";
    $conn= new mysqli($servername,$username,$password,$dbname) or die("Connection failed:%s\n $conn->error");
    return $conn;
}
function CloseConn($conn)
{
    $conn->close();
}

?>
