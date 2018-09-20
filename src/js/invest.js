$("#page").page({
    debug: true, //开启调试
    showInfo: true, //显示调试信息
    pageSize: 5, //定义每页的数据条数
    showJump: true, //开启跳转功能
    showPageSizes: true, //用户自定义每页大小
    remote: {
        //请求数据的地址
        url: './api/investList.php', //请求的数据
        //请求成功的回调函数
        success: function (data) {
            console.log("获取api回来的数据",data);
            //渲染模板
            var htmlStr=$("#borrowTmpl").tmpl(data.list);
            //把渲染后的结果更新到页面
            $("#gridBody").html(htmlStr);
            //$("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
        }
    }
});
$("#page").on("pageClicked", function (event, pageIndex) {
    //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
}).on('jumpClicked', function (event, pageIndex) {
    //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
}).on('pageSizeChanged', function (event, pageSize) {
    //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
});