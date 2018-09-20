<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>投资列表</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入重置的css -->
    <link rel="stylesheet" href="./dist/css/minCss/header.min.css">
    <!-- 引入人物模板页面 -->
    <link rel="stylesheet" href="./dist/css/minCss/person.min.css">
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 验证用户身份是否合法 -->
    <script src="./dist/js/userStateCheck.min.js"></script>
</head>
<body>
    <?php
        require_once("header.php")
    ?>

    <!-- 内容 -->
    <div class="container" id="perCon">
        <div class="row list">
            <!-- 左侧列表组 -->
            <?php
                require_once("./leftlist.php");
            ?>
            <!-- 右侧 -->
            <div class="col-md-9 col-sm-9 person_right">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">我的借款信息列表</h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                    <table class="table table-striped __web-inspector-hide-shortcut__">
                        <thead>
                        <tr>
                            <th>标题</th>
                            <th>时间</th>
                            <th>借款金额(元)</th>
                            <th>期限</th>
                            <th>利率</th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody id="borrowData">
                        
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- footer -->
    <?php
        require_once("footer.php")
    ?>

    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入渲染文件的js -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
    <!-- 引入覆盖的js文件 -->
    <script src="./dist/js/index.min.js"></script>

    <script id="borrowTmpl" type="text/html">
        <tr>
            <td>${borrowTitle}</td>
            <td>${submitDatetime}</td>
            <td>${borrowAmount}</td>
            <td>${monthes2Return}</td>
            <td>${currentRate}%</td>
            <td>
                <label class="text-muted">待发布</label>
            </td>
        </tr>
    </script>
    <script src="./dist/js/borrowApply.min.js"></script>
</body>
</html>