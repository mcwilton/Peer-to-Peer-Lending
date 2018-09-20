<?php
    header("Content-type:text/html;charset=utf-8");
    require_once("./link.php");

    // 构造sql语句
    $sql="select * from borrowinfo";
    // 执行sql语句
    $result=mysqli_query($link,$sql);

    //获取总的记录数
    $total=mysqli_num_rows($result);  
    // 定义接受分页参数
    $pageIndex=$_GET["pageIndex"];
    $pageSize=$_GET["pageSize"];
    // 构造分页sql语句
    $skipNum=$pageSize*$pageIndex;
    $sql.=" limit $skipNum,$pageSize";
    $result=mysqli_query($link,$sql);
    // var_dump($result);
    //定义变量保存数据
    $investData=[];
    // 循环获得数据
    while($rs=mysqli_fetch_assoc($result)){
        array_push($investData,$rs);
    }

    $result=[
        "total"=>$total,
        "list"=>$investData
    ];
    // var_dump($investData);
    echo json_encode($result);
?>