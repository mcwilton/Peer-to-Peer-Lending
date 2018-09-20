//发起ajax请求到后端API验证是否登录
$.get("./api/checkState.php",function (data) {
    // console.log("验证的结果",data);
    //处理前端的业务逻辑
    if(!data.isSuccess){
        alert(data.msg);
        location.href="login.php";
    }
},"json");