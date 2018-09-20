<?php
    // 接收数据
    $borrowType=$_POST["borrowType"];
    $borrowAmount=$_POST["borrowAmount"];
    $currentRate=$_POST["currentRate"];
    $monthes2Return=$_POST["monthes2Return"];
    $repayment=$_POST["repayment"];
    $minAmount=$_POST["minAmount"];
    $maxAmount=$_POST["maxAmount"];
    $rewardAmount=$_POST["rewardAmount"];
    $disableDays=$_POST["disableDays"];
    $borrowTitle=$_POST["borrowTitle"];
    $description=$_POST["description"];
    
    session_start();
    $id=$_SESSION["id"];
    // 构造sql语句
    $sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,id) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$id)";
    // 链接数据库
    require_once("link.php");
    // 执行sql语句
    $result=mysqli_query($link,$sql);
    // 
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