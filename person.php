<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>填写人物资料</title>
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
            <div class="col-md-9 col-sm-9 col-xs-12 person_right">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <!-- 1 -->
                        <div class="row hed">
                            <div class="col-sm-2 col-xs-12 headleft">
                                <img src="./images/head_icon.jpg" alt="">
                            </div>
                            <div class="col-sm-10 col-xs-12 headright">
                                <p>昵 称：源代码教育</p>
                                <p>用户名：小强</p>
                                <p>最后登录时间：2016-10-25 15:30:10</p>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="row" id="money">
                           <div class="col-md-4 col-sm-12">总金额：<span>10000元</span></div>
                           <div class="col-md-4 col-sm-12">可用金额：<span>8000元</span></div>
                           <div class="col-md-4 col-sm-12">冻结金额：<span>2000元</span></div>
                        </div>
                        <!-- 3 -->
                        <div id="myButton">
                            <button type="button" class="btn btn-primary btn-lg">账户充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账户提现</button>
                        </div>
                        <!-- 4 -->
                            <div class="row" id="rz">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="pull-left">
                                        <img src="./images/shiming.png" alt="">
                                    </div>
                                    <div class="pull-left">
                                        <h4>实名认证</h4>
                                        <p>未认证 <a href="">马上认证</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div>
                                        实名认证之后才能在平台投资
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="pull-left">
                                        <img src="./images/shiming.png" alt="">
                                    </div>
                                    <div class="pull-left">
                                        <h4>实名认证</h4>
                                        <p>未认证 <a href="">马上认证</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div>
                                        实名认证之后才能在平台投资
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="pull-left">
                                        <img src="./images/shiming.png" alt="">
                                    </div>
                                    <div class="pull-left">
                                        <h4>实名认证</h4>
                                        <p>未认证 <a href="">马上认证</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div>
                                        实名认证之后才能在平台投资
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="rz">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="pull-left">
                                        <img src="./images/shiming.png" alt="">
                                    </div>
                                    <div class="pull-left">
                                        <h4>实名认证</h4>
                                        <p>未认证 <a href="">马上认证</a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div>
                                        实名认证之后才能在平台投资
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- 引入覆盖的js文件 -->
    <script src="./dist/js/index.min.js"></script>

</body>
</html>