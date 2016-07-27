<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>开放平台物流接口</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/res/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="http://v3.bootcss.com/assets/js/ie8-responsive-file-warning.js"
            tppabs="http://v3.bootcss.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--    <script src="./js/ie-emulation-modes-warning.js"></script>-->
    <link rel="stylesheet" href="/res/css/mono-blue.css">

    <script src="/res/js/highlight.pack.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/res/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="/res/js/respond.min.js"></script>
    <![endif]-->
    <style>
        * {
            font-family: "Microsoft YaHei UI", "Microsoft YaHei";
        }
    </style>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header" style="float: left;">
            <a class="navbar-brand" href="#">开放平台物流接口</a>

        </div>
        <a style="float: right; line-height: 50px; color: #fff; padding-right: 10px;" href="/doc/index">物流API</a>
        <a style="float: right; line-height: 50px; color: #fff; padding-right: 10px;" href="/Introduction">公司简介</a>
        <a style="float: right; line-height: 50px; color: #fff; padding-right: 10px;" href="/">首页</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="lefttit">接口文档</div>

            <ul class="nav nav-sidebar">
                <li class="active">
                    <a href="/doc/index">物流API
                        <i class="newIcon"
                           style="background: orange;font-size:12px;font-style: normal;padding: 1px 3px;color: white;margin-left: 10px;border-radius: 3px;">NEW</i>
                    </a>
                </li>
            </ul>
            <script>
                var now = 0;
                var text = "new".split("");
                var element = document.querySelector(".newIcon");
                function interval() {
                    if (now >= text.length) {
                        element.innerHTML = text.join('');
                        setTimeout(interval, 2000);
                        now = 0;
                    } else {
                        var newText = text.slice();
                        newText[now] = newText[now].toUpperCase();
                        element.innerHTML = newText.join('');
                        setTimeout(interval, 200);
                        now++;
                    }
                }
                if (element) {
                    interval();
                }
            </script>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="page-header">
                <h1>商品库API</h1>
            </div>

            <div class="code-sample" style="display: block;">
                <h3>示例代码</h3>
                <hr>
                <a class="btn btn-default" href="#sample_php">PHP版</a>
                <br/>
            </div>
            <h3>统一参数列表</h3>
            <hr>
            <!--            <span class="label label-primary">接口地址</span>-->
            <div class="table-responsive">
                <table class="table table-striped table-bordered" width="51%">
                    <thead>
                    <tr>
                        <th style="width: 50px;">名称</th>
                        <th style="width: 50px;">必要</th>
                        <th>说明</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>order_no</td>
                        <td>是</td>
                        <td>平台订单号</td>
                    </tr>
                    </tbody>
                </table>

            </div>

            <hr>
            <style>
                .code-sample {
                    display: none;
                }
            </style>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <strong>接口地址:</strong>
                </div>
                <div class="panel-body">
                    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/api/">
                        http://<?php echo $_SERVER['HTTP_HOST']; ?>/api/</a>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading"><strong>返回代码</strong></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            成功:<br/>
                            状态位 result 为 success
                        </div>
                        <div class="col-md-6">
                            失败:<br/>
                            状态位 result 为 error, msg 为错误
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <pre>{
  "result": "success",
  "msg": "",
  "data": [
    [
      "2016-06-01 08:00:20",
      "【青岛市】【已签收，签收人是本人或者速递易。如错签xxx】，感谢使用百世快递，期待再次为您服务"
    ],
    [
      "2016-06-01 07:02:10",
      "【青岛市】胶州派件员：营海自取点 1xxx 正在为您派件"
    ],
    [
      "2016-06-01 06:02:10",
      "【青岛市】快件已到达 胶州"
    ],
    [
      "2016-06-01 05:02:10",
      "【青岛市】青岛转运中心 已发出"
    ],
    [
      "2016-06-01 04:02:10",
      "【青岛市】快件已到达 青岛转运中心"
    ],
    [
      "2016-06-01 03:02:10",
      "到青岛市【青岛转运中心】"
    ]
  ]
}
                            </pre>
                        </div>
                        <div class="col-md-6">
                            <pre>{
  "result": "error",
  "msg": "没有找到该单号"
}
                            </pre>
                        </div>
                    </div>
                    <br/>
                </div>
            </div>


            <div style="display: none;">
                <h3>签名算法：</h3>
                <hr>
                <strong>签名说明</strong>
                <div class="table-responsive">
                    <p>timer: 指定格式的时间，签名过期时间 </p>
                    <p>sign：数据签名</p>
                    <p>external_company：access key </p>
                    <p>sk：secret key </p>
                </div>
                <p><strong>签名具体生成步骤 </strong></p>
                <p><strong>第一步：对参数按照key value的格式，并按照参数名ASCII字典序排序拼接，生成的字符串如下如下：</strong></p>
        <pre><code>
            </code></pre>
                <p><strong>第二步：MD5计算前面的字符串得出签名：</strong></p>
                <pre><code>sign=MD5(stringA)</code></pre>

                <br/><br/>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--script src="./js/jquery.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<!--script src="./js/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="./js/instant.js" data-no-instant></script>
<script data-no-instant>//InstantClick.init(50);</script>
<script src="./js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>