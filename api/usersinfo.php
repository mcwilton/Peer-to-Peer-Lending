<?php
    // 
    header("content-type:text/html;charest=utf-8");
    // 链接数据库
    require_once("./link.php");
    
    // 通过session判断id是哪个用户
    session_start();
    $id=$_SESSION['id'];
    /* $sql="select * from user where id=$id";
    $result=mysqli_query($link,$sql); */
    // 接收数据
    $realname=$_POST['realname'];
    $idcard=$_POST['idcard'];
    $tel=$_POST['tel'];
    $edu=$_POST['edu'];
    $income=$_POST['income'];
    $address=$_POST['address'];
    // 构造sql语句
    // update table_name set value1='aaa',value2='bbb' where id = xxx;
    $sql="update user set realname='$realname',idcard='$idcard',tel='$tel',edu='$edu',income='$income',address='$address' where id=$id";
    // 执行语句，保存数据
    $result=mysqli_query($link,$sql);
    
    // 判断逻辑
    if($result){
        $rsArray=["isSuccess"=>true,"msg"=>"用户注册成功"];
        echo json_encode($rsArray);
    }else{
        $rsArray=["isSuccess"=>false,"msg"=>"用户注册失败"];
        echo json_encode($rsArray);
    }

    
    require_once("close.php");
?>