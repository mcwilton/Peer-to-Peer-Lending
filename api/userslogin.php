<?php
    // 获取前端传来的数据
    $username=$_POST["username"];
    $pwd=md5($_POST["pwd"]);
    // 链接数据库
    require_once("link.php");
    // 构造sql语句
    $sql="select * from user where username='".$username."' and pwd='".$pwd."'";
    
    // 执行sql语句
    $result=mysqli_query($link,$sql);
    //5. 获取查询的结果集
    $rs=mysqli_fetch_assoc($result); //不为null就是账号密码正确，登录成功，反之就是账号或者密码不正确
    // var_dump($rs);

    //6. 根据是否执行成功返回json结果到前端
    if($rs!=null){
        //登录成功就创建session对象
        session_start();
        $_SESSION["username"]=$rs["username"];
        $_SESSION["id"]=$rs["id"]; 
        
        //json_encode() 把关联数组转换为json格式
        $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功!"];
        echo json_encode($rsArray);
    }
    else{
        $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败!"];
        echo json_encode($rsArray);
    };
    mysqli_free_result($result);
    require_once("close.php");
?>
