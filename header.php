<!-- 头部 -->
    <!-- 顶部导航 -->
    <?php
        require_once("topnav.php")
    ?>

    <!-- 主导航 -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="./images/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav" id="menu">
                <li><a href="./index.php?menuid=1">首页</a></li>
                <li><a href="./invest.php?menuid=2">我要投资</a></li>
                <li><a href="./borrow.php?menuid=3">我要借款</a></li>
                <li><a href="./person.php?menuid=4">个人中心</a></li>
                <li><a href="#">新手指引</a></li>
                <li><a href="#">关于我们</a></li>
            </ul>
        </div><!-- /.container-fluid -->
    </nav> 

<!-- 引入jquery -->
<script src="./lib/jquery/jquery.min.js"></script>
<script>
    var reqUrl=location.href;
    var menu=reqUrl.split("=")[1];
    $("#menu li").eq(menu-1).addClass("active").sibling("li").removeClass("active");
</script>