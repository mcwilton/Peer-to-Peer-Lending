<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入重置的css -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>
<body>
    <?php
        require_once("header.php")
    ?>

    <!-- 轮播图 -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./images/banner01.jpg">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="./images/banner02.jpg">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- threes feature -->
    <div class="container" id="feature">
        <div class="row">
            <div class="col-sm-4 col-xs-12" >
                <h3>乐游原</h3>
                <p>向晚意不适，驱车登古原。夕阳无限好，只是近黄昏。</p>
            </div>
            <div class="col-sm-4 col-xs-12" >
                <h3>天净沙.秋思</h3>
                <p>枯藤老树昏鸦，小桥流水人家，古道西风瘦马。夕阳西下，断肠人在天涯。</p>
            </div>
            <div class="col-sm-4 col-xs-12" >
                <h3>临江仙</h3>
                <p>才得吹嘘身渐稳，只疑远赴蟾宫。雨馀时候夕阳红。几人平地上，看我碧霄中。</p>
            </div>
        </div>
    </div>

    <!-- 案例 -->
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body clearfix">
            <h2 class="pull-left">进行中借款</h2>
            <p class="pull-right"><a href="">进入投资列表</a></p>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>借款人</th>
                    <th class="titlenone">原因</th>
                    <th>年利率</th>
                    <th>金额</th>
                    <th class="titlenone">还款方式</th>
                    <th>进度</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="titlenone">Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="titlenone">Mark</td>
                    <td>Otto</td>
                    <td class="btn btn-primary btn-sm btn-danger">查看</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td class="titlenone">Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td class="titlenone">Mark</td>
                    <td>Otto</td>
                    <td class="btn btn-primary btn-sm btn-danger">查看</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- 新闻资讯 -->
    <div class="container">
        <div class="row newscom">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body clearfix">
                        <h2 class="pull-left">进行中借款</h2>
                        <p class="pull-right"><a href="">进入投资列表</a></p>
                    </div>
                </div> 
                <ul>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                </ul>      
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body clearfix">
                        <h2 class="pull-left">进行中借款</h2>
                        <p class="pull-right"><a href="">进入投资列表</a></p>
                    </div>
                </div> 
                <ul>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                </ul>       
            </div>
        </div> 
        <div class="row newscom">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body clearfix">
                        <h2 class="pull-left">进行中借款</h2>
                        <p class="pull-right"><a href="">进入投资列表</a></p>
                    </div>
                </div> 
                <ul>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                </ul>      
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body clearfix">
                        <h2 class="pull-left">进行中借款</h2>
                        <p class="pull-right"><a href="">进入投资列表</a></p>
                    </div>
                </div> 
                <ul>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                    <li><a href="" class="clearfix">
                        <span class="pull-left">央视力挺互联网金融</span>
                        <span class="pull-right">发表日期：2015-03-23</span>
                    </a></li>
                </ul>       
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