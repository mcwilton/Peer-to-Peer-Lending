<?php
    header("content-type:text/html;charest=utf-8");
    // 链接数据库
    require_once("./link.php");

    // 开启session构造查询语句
    session_start();
    $id=$_SESSION["id"];
    $sql="select * from borrowinfo where id=$id";

    // 执行语句
    $result=mysqli_query($link,$sql);

    $data=[
        ["value"=>0,"name"=>'房易贷'],
        ["value"=>0,"name"=>'车易贷'],
        ["value"=>0,"name"=>'信用贷']
    ];

    // 遍历结果
    while($rs=mysqli_fetch_assoc($result)){
        if($rs["borrowType"]=="t1"){
            $data[2]["value"]+=$rs["borrowAmount"];
        }
        else if($rs["borrowType"]=="t2"){
            $data[1]["value"]+=$rs["borrowAmount"];
        }
        else if($rs["borrowType"]=="t2"){
            $data[1]["value"]+=$rs["borrowAmount"];
        }
    }

    // 返回结果
     //返回的结果
    $result=[
    "title"=>['房易贷','车易贷','信用贷'],
    "data"=>$data
    ];

    echo json_encode($result);
?>