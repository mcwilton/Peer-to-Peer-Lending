<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>投资</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!--  1. 引入插件的css -->
    <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
    <!-- 引入重置的css -->
    <link rel="stylesheet" href="./dist/css/minCss/header.min.css">
    <!-- 引入借钱模板页面 -->
    <link rel="stylesheet" href="./dist/css/minCss/borrow.min.css">
</head>
<body>
    <?php
        require_once("header.php")
    ?>

    <!-- 内容 -->
    <div class="container">
		<h4 class="page-title">投资列表</h4>
		<form action="invest_list.html" id="searchForm">
			<div style="margin: 20px 0px;">
					<span class="text-muted">标的状态</span><div style="margin-left: 30px" class="btn-group" data-toggle="buttons">
				  <label class="btn btn-default active">
				    <input type="radio" name="bidRequestState" value="-1" autocomplete="off" checked />&emsp;全部&emsp;
				  </label>
				  <label class="btn btn-default">
				    <input type="radio" name="bidRequestState" value="2" autocomplete="off" />&emsp;招标中&emsp;
				  </label>
				  <label class="btn btn-default">
				    <input type="radio" name="bidRequestState" value="8" autocomplete="off" />&emsp;还款中&emsp;
				  </label>
				</div>
			</div>
		</form>
		<table class="table el-table table-hover">
			<thead id="gridHead">
				<tr>
					<th>借款人</th>
					<th width="180px">借款标题</th>
					<th>年利率</th>
					<th>金额</th>
					<th>还款方式</th>
					<th>进度</th>
					<th width="80px">操作</th>
				</tr>
			</thead>
			<tbody id="gridBody">
			
            </tbody>
        </table>
        <!-- 此处是分页插件  4. 拷贝页面结构-->
		<div style="text-align: center;">
            <div id="page" class="m-pagination"></div>
		</div>
    </div>

    <!-- footer -->
    <?php
        require_once("footer.php")
    ?>

    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入模板js -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 3. 引入插件的js库 -->
    <script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入覆盖的js文件 -->
    <script src="./dist/js/index.min.js"></script>

    <script id="investList" type="text/html">
        <tr>
            <td>xy</td>
            <td>${borrowTitle}</td>
            <td>${currentRate}%</td>
            <td>${borrowAmount}</td>
            <td>${repayment}</td>
            <td>100.00%</td>
            <td class="btn btn-danger btn-lg invt">查看</td>
        </tr>

    </script>
    <script>
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
                // console.log("获取api回来的数据",data);
                //渲染模板
                var htmlStr=$("#investList").tmpl(data.list);
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
    </script>
       <!--  $.get("./api/investList.php",function(result){
        console.log(result);
        var htmlStr=$("#investList").tmpl(result);
        $("#gridBody").html(htmlStr);
        },"json"); -->
</body>
</html>