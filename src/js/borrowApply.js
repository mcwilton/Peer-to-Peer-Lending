// 获取借款类型
var reqUrl=location.href;
var borrowType=reqUrl.split("=")[1]
$("#borrowType").val(borrowType);

$("#borrowbtn").on("click",function(){
    // 获得发送的数据
    var data=$("#borrowinfo").serialize();
    // 发送ajax
    $.post("./api/borrowApplys.php",data,function(result){
        if(result.isSuccess){
            alert(result.msg);
            location.href='./borrowlist.php';
        }else{
            alert(result.msg)
        }
    },"json");
})



//借款页面加载时自动发起ajax请求到后台的api获取当前登录用户的借款信息
$.get("./api/borrowtable.php",function (result) {
    //console.log("后端api返回的结果",result);
    //有了模板，有了数据，把模板+数据=动态网页
    //语法：$('模板ID').tmpl(JSON数据或者数组) 返回的是数据和模板拼凑的html Dom元素
    var htmlStr=$("#borrowTmpl").tmpl(result);
    //console.log(htmlStr);
    //把渲染后的html更新到页面
    $("#borrowData").html(htmlStr);
},"json");