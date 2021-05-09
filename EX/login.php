<?php

$name = trim($_POST['name']);
$password = trim($_POST['password']);

if($name == "Peter"){
    if ($password == "abcd1234"){
        echo "登陸成功!";
    }else{
    echo "登陸失敗!";
}
}else{
    echo "登陸失敗!";
}


?>