<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: #eeeef2">
<div class="panel panel-default">
    <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center;">
                <a href="login.php" style="float: left;"><span class="glyphicon glyphicon-user"></span></a>
                <a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
                <a href="edit.php" style="float: right;"><span class="glyphicon glyphicon-edit"></span></a>
            </h3>
    </div>
    <div class="panel-body" style="padding: 10px">
        <div class="panel panel-default" style="margin-bottom: 10px">
            <div class="panel-heading">
                <h3 class="panel-title">
                    用户登录
                </h3>
            </div>
            <div class="panel-body">
                <form action="common/index.php" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" placeholder="邮箱">
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control" placeholder="密码">
                    </div><br/>
                    <input type="submit" class="btn btn-primary btn-block" value="登陆"><br>
                </form>
            </div>
        </div>
        <div style="text-align: right;font-size: 15px;">
            <a href="user-create.php">注册</a>
            <span class="divider">/</span>
            <a href="#">忘记密码</a>
        </div>
    </div>
</div>
</body>
</html>