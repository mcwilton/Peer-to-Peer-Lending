<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
     <!-- 引入bootstrap validator样式 -->
     <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入重置的css -->
    <link rel="stylesheet" href="./dist/css/minCss/toptemplate.min.css">
    <!-- 引入自定义css -->
    <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
</head>
<body>
    <!-- 顶部导航 -->
    <?php
        require_once("topnav.php");
    ?>
    <!-- 主导航 -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="./images/logo.png"></a>
                <span>用户登录</span>
            </div>
        </div><!-- /.container-fluid -->
    </nav> 
    <!-- 主体内容 -->
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">用户登录</h3>
            </div>
            <div class="panel-body">
            <form class="form-horizontal" id="loginForm">
                
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">姓名</label>
                    <div class="col-sm-6">
                        <input type="text" name="username" class="form-control"placeholder="请输入姓名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
                    <div class="col-sm-6">
                        <input type="password" name="pwd" class="form-control" placeholder="请输入密码">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">提交</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    


    <!-- 页尾 -->
    <?php
        require_once("footer.php")
    ?>

    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
   <!-- 引入bootstrap validator.js -->
   <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入覆盖的js文件 -->
    <script src="./dist/js/index.min.js"></script>
    <!-- 引入表单验证的js文件 -->
    <script src="./dist/js/userlogin.min.js"></script>
</body>
</html>