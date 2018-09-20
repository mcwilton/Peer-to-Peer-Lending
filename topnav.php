<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span>028-86261949</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li id="homepage"><a href="./index.php">首页</a></li>
                <li><a href="#">帮助</a></li>
                <li data-toggle="tooltip" data-placement="bottom" data-html="true" title='<img src="./images/contract.png">'><a href="#">联系客服</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- 引入jquery -->
<script src="./lib/jquery/jquery.min.js"></script>
    <script>
        $.get("./api/checkState.php",function(data){
            if(data.isSuccess){
                // console.log(data);
                var htmlStr=`
                <li><a href="./person.php">${data.username}</a></li>
                <li><a href="#">赶快充值</a></li>
                <li><a href="./api/loginOut.php">注销</a></li>`;
                $("#homepage").after(htmlStr)
            }
            else{
                //显示登录前菜单
                var htmlStr=`
                <li><a href="./register.php">注册</a></li>
                <li><a href="./login.php">登录</a></li>`;
                $("#homepage").after(htmlStr);
            }
        },"json")
    </script>