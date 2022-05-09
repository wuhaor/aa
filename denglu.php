<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport"
			content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
		<title>Liberty</title>

	</head>
	<body>

<div style="width: 100%;height: 100%;background:#1F1F29; ">
		<div class="container-fluid" style="background:url(./img/denglu.png) center;height: 46.875rem;">
			<div class="panel panel-default col-3 col-xs-offset-8" style="margin-top:8.125rem;">
				<div class="panel-heading">
					<h3 class="bfon" style="text-align: center">
						登录
					</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" style="margin-top:10px" ; name="log" action="login.php" method="post">
						<div class="form-group">

							<label for="firstname" class="col-sm-2 control-label">账号</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="user" id="user" placeholder="请输入你的账号" style="height: 40px">
							</div>
						</div>
						<div class="form-group">
							<label for="lastname" class="col-sm-2 control-label">密码</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="pass" id="pass" placeholder="请输入你的密码" style="height: 40px">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input type="checkbox"> 记住账号
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="button" class="btn btn-info" style="width: 130px;height: 40px;" name="dengl" onclick="check(log)" value="登录">
                                <input class="btn btn-success" style="width: 130px;height: 40px;" type="reset" name="reset" value="重置"/><br><br>
                                <a onclick="creatRequest('zhuce.php')">还没有账号，赶快注册一个吧</a>
							</div>
						</div>
					</form>

				</div>
			</div>
		
		</div>
		<div class="footer" style="background-color: #1f1f29;font-size: 4.375rem;">
			音乐改变生活
		</div>
    <div class="footer" style="margin-top: 190px">
        音乐资源全来自于网易云音乐
    </div>
</div>
	</body>

</html>
