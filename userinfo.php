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
    <link rel="stylesheet" href="./dist/css/minCss/userinfo.min.css">
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
    <div class="container">
        <div class="row list">
            <!-- 左侧列表组 -->
            <?php
                require_once("./leftlist.php");
            ?>
            <!-- 右侧 -->
            <div class="col-xs-12 col-sm-9 cont_right">
                <div class="panel panel-default">
                    <div class="panel-heading">个人资料</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" id="infoForm">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label" id="loginname">用户名</label>
                                <!-- <div class="col-sm-6" name="username">
                                   <p></p>
                                </div> -->
                                
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">真实姓名</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="realname" id="inputPassword3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">证件号码</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="idcard" id="inputPassword3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">联系电话</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="tel" id="inputPassword3" placeholder="请输入电话号">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">个人学历</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="edu">
                                        <option>初中</option>   
                                        <option>中专/高中</option>
                                        <option>专科</option>
                                        <option>本科</option>
                                        <option>硕士研究生</option>
                                        <option>博士研究生</option>
                                    </select>
                                </div>
                                    
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">个人收入</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="income">
                                        <option>1000元以下</option>
                                        <option>1000元-1999元</option>
                                        <option>2000元-2999元</option>
                                        <option>3000-4999</option>
                                        <option>5000-8999</option>
                                        <option>10000以上</option>
                                    </select>
                                </div>
                               
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">联系地址</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="address" id="inputPassword3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" id="infobtn" class="btn btn-default">保存数据</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
    <script src="./dist/js/userinfo.min.js"></script>
</body>
</html>