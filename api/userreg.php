<?php
    $email=$_POST["email"];
    $username=$_POST["username"];
    $pwd=md5($_POST["pwd"]);
    $phone=$_POST["phone"];

    require_once("link.php");

    $sql="insert into user(email,username,pwd,phone) values('".$email."','".$username."','".$pwd."','".$phone."')";

    // 执行sql语句
    $result=mysqli_query($link,$sql);
    // 根据执行结果返回前端
    if($result){
        $rsArray=["isSuccess"=>true,"msg"=>"用户注册成功!"];
        echo json_encode($rsArray);
    }else{
        $rsArray=["isSuccess"=>false,"msg"=>"注册失败"];
        echo json_encode($rsArray);
    };
    // 释放资源
    require_once("close.php");
?>