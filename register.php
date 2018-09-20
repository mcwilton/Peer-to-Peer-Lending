<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrap validator样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入重置的css -->
    <link rel="stylesheet" href="./dist/css/minCss/toptemplate.min.css">
    <!-- 引入自定义css -->
    <link rel="stylesheet" href="./dist/css/minCss/register.min.css">
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
                <span>用户注册</span>
            </div>
        </div><!-- /.container-fluid -->
    </nav> 
    <!-- 主体内容 -->
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">用户注册</h3>
            </div>
            <div class="panel-body">
            <form class="form-horizontal" id="registerForm" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="请输入Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">姓名</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="username" placeholder="请输入姓名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="pwd" placeholder="请输入密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">确认密码</label>
                    <div class="col-sm-6">
                    <input type="password" class="form-control" name="checkpwd" placeholder="请再次输入密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">电话</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" placeholder="请输入手机号码">
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

    <div class="modal fade" id="msgShowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="msgShowTitle">标题</h4>
            </div>
            <div class="modal-body" id="msgShowContent">
                内容
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
            </div>
            </div>
        </div>
    </div>

    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
   <!-- 引入bootstrap validator.js -->
   <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入覆盖的js文件 -->
    <script src="./dist/js/index.min.js"></script>
    <!-- 引入表单验证的js文件 -->
    <script src="./dist/js/registerForm.min.js"></script>
    
</body>
</html>