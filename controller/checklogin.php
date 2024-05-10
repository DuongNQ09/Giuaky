<?php
$username=$_POST['user'];
$password=$_POST['pass'];
if($username == "admin" && $password="123456"){
    echo "<font color=blue>WELCOME TO, ".$username."<font>";
}
else{
    echo "<font color=red>Username hoac password khong chinh xac, vui long dang nhap lai<font>";
}
?>