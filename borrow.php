<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借钱</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
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
        <div class="row cont">
            <div class="col-xs-12 col-sm-4">
                <div class="cont_title">信用贷</div>
                <div class="cont_cont">
                    <p>可借金额 <i>￥20000</i></p>
                    <a href="">申请条件</a>
                    <p>仅限成都地区</p>
                    <ul>
                        <li>填写基本资料</li>
                        <li>身份认证</li>
                        <li>视频认证</li>
                    </ul>
                    <a href="./borrowApply.php?id=t1">立即申请</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="cont_title">车易贷</div>
                <div class="cont_cont">
                    <p>可借金额 <i>￥20000</i></p>
                    <a href="">申请条件</a>
                    <p>仅限成都地区</p>
                    <ul>
                        <li>填写基本资料</li>
                        <li>身份认证</li>
                        <li>视频认证</li>
                    </ul>
                    <a href="./borrowApply.php?id=t2">立即申请</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="cont_title">房易贷</div>
                <div class="cont_cont">
                    <p>可借金额 <i>￥20000</i></p>
                    <a href="">申请条件</a>
                    <p>仅限成都地区</p>
                    <ul>
                        <li>填写基本资料</li>
                        <li>身份认证</li>
                        <li>视频认证</li>
                    </ul>
                    <a href="./borrowApply.php?id=t3">立即申请</a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
        require_once("footer.php")
    ?>

    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入覆盖的js文件 -->
    <script src="./dist/js/index.min.js"></script>
</body>
</html>