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
    <link rel="stylesheet" href="./dist/css/minCss/borrowApply.min.css">
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
                    <div class="panel-body"> 
                        <div class="rconthead">
                            <h2>信用借款</h2>
                            <p>
                                <span>授信额度：</span><span class="tex">2000</span>
                                <span class="tex2">可借额度：</span><span class="tex">2000</span>
                            </p>
                        </div> 
                    </div>
                    <div class="panel-heading">
                        <p>借款信息<span>信用标</span></p>
                    </div> 
                
                    <div class="panel-cont">
                        <form id="borrowinfo" method="post">
                            <div class="form-group">
                                <label class="control-label">
                                    借款类型
                                </label>
                                <select class="form-control" name="borrowType" id="borrowType">
                                    <option value="t1">信用贷</option>
                                    <option value="t2">车易贷</option>
                                    <option value="t3">房易贷</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <p>借款金额</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="" name="borrowAmount">
                                    <div class="input-group-addon">元</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <p>借款利息</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="" name="currentRate">
                                    <div class="input-group-addon">%</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <p>借款期限</p>
                                <div class="input-group">
                                    <select class="form-control" name="monthes2Return">
                                        <option>1</option>
                                        <option>3</option>
                                        <option>6</option>
                                        <option>9</option>
                                        <option>12</option>
                                        <option>24</option>
                                    </select>
                                    <div class="input-group-addon">月</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    还款方式
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" checked="checked" name="repayment" />
                                    按月分期
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="repayment" />
                                    按月到期
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <p>最小投标</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="" name="minAmount">
                                    <div class="input-group-addon">元</div>
                                </div>
                            </div>
                            <div class="form-group">
										<label class="control-label">
											最大投标
										</label>
										<div class="input-group">
											<input class="form-control" name="maxAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <p>投标奖金</p>
                                <div class="input-group">
                                    <input type="text" name="rewardAmount" class="form-control" id="exampleInputAmount" placeholder="">
                                    <div class="input-group-addon">%</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>招标天数</p>
                                <select class="form-control" name="disableDays">
                                    <option>1</option>
                                    <option>3</option>
                                    <option>6</option>
                                    <option>9</option>
                                    <option>12</option>
                                    <option>24</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <p>借款标题</p>
                                <input type="text" name="borrowTitle" class="form-control" id="exampleInputAmount" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <p>借款描述</p>
                                <textarea name="description" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" id="borrowbtn" class="btn btn-primary">提交申请</button>
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
    
    <!-- 引入自定义js -->
    <script src="./dist/js/borrowApply.min.js"></script>
</body>
</html>