<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <title>Liberty</title>
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            .carousel-indicators{
                width: 70%;
            }
            .carousel-indicators li{
                height: 6px;
                border: 0;
            }
            .carousel-indicators .active{
                width: 30px;
                height: 6px;
            }
        </style>
    </head>
    <body>
    <?php session_start();if(!empty($_SESSION)){$us=$_SESSION['userid'];}else {$us="";echo"<script>alert('请先登录！');location.href='index.php'</script>" ;}?>
    <nav id="menu">
        <div class="container">
            <div class="im"><img src="img/Logo.png" class="img-responsive"></div>
            <div id="menu3">
                <ul>
                    <li><a href="me.php" class="n">首页</a></li>
                    <li><span onclick="creatRequest('tuijian.php')" class="nnav">排行榜</span></li>
                    <li><span onclick="creatRequest('MV.php')" class="nnav">MV</span></li>
                    <li><span onclick="creatRequest('vip.php')" class="nnav">VIP</span></li>
                    <li><span onclick="creatRequest('list.php')" class="nnav" >歌单</span></li>
                    <li><span onclick="creatRequest('myinfo.php')" class="nnav" >我的</span></li>
                 </ul>
            </div>
            <div class="form-inline search">
                <div class="form-group"><input type="text"  class="form-control" placeholder="请输入你要查找的歌曲" id="chaxun"/></div>
                <button class="btn btn-success" onclick="chaxun()">搜索</button>
            </div>
        </div>
    </nav>
    <div id="cen1">
    <div class="cen">
        <div class="container" style="padding-left: 0;padding-right: 0;">
            <div id="demo" class="carousel slide" data-ride="carousel">

                  <!-- 指示符 -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                  </ul>

                  <!-- 轮播图片 -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://static.runoob.com/images/mix/img_fjords_wide.jpg">
                    </div>
                    <div class="carousel-item">
                      <img src="https://static.runoob.com/images/mix/img_nature_wide.jpg">
                    </div>
                    <div class="carousel-item">
                      <img src="https://static.runoob.com/images/mix/img_mountains_wide.jpg">
                    </div>
                  </div>

                  <!-- 左右切换按钮 -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
            </div>
        </div>
    </div>
    <div class="container">
		<div id="cen">
            <div class="bt">
                <img src="img/fire1.png" class="bim" />
                <h1 class="bfon">热门推荐</h1>
            </div>
			<?php
				include("conn.php");
				$sql=mysqli_query($link,"select * from album");
				$row=mysqli_fetch_object($sql);
			    $count = 1;
				if(!$row){
					echo"<font color='red'>暂无歌曲！</font>";
				}else{
					do{
					    if($count%4==1)
					        echo"<div class='row'>";
			
						?>
							<div class="col-md-3"><img src="<?php echo $row->adress;?>" class="img-responsive"><a href="javascript:void(0)" class="f" onclick="creatRequest('showsong.php?id=<?php echo $row->Aid;?>')"><?php echo $row->Ainfo;?></a></div>
				<?php
			            if($count%4==0)
			                echo"</div>";
                        $count = $count+1;
				}while($row=mysqli_fetch_object($sql));
					}
					mysqli_free_result($sql);
					mysqli_close($link);
			?>
			</div>
    </div>
            <div class="footer">
                    音乐资源全来自于网易云音乐
            </div>
    </div>
    </body>
	<script type="text/javascript">
		function creatRequest(url){
			http_request=false;
			urll=url;
			if(window.XMLHttpRequest){
				http_request=new XMLHttpRequest();
				if(http_request.overrideMimeType){
					http_request.overrideMimeType("text/xml");
				}
			}else if(window.ActiveXObject){
				try{
					http_request=new ActiveXObject("Msxml2.XMLHTTP");
				}catch(e){
					        try {
							http_request = new ActiveXObject("Microsoft.XMLHTTP");
							 } catch (e) { }
		
				}
			}
			         if (!http_request) {
					alert("不能创建XMLHTTP实例!");
					return false;
				}
				http_request.onreadystatechange = alertContents; 
			          //指定响应方法函数
				http_request.open("GET",url, false);	
				http_request.send(null);
			}
		function alertContents() { //处理服务器返回的信息
            var pattern=/.*collection.php.*/;
            var pattern1=/.*change.php.*/;
            var pattern2=/.*del.php.*/;
            var result=pattern.test(urll);
            var result1=pattern1.test(urll);
            var result2=pattern2.test(urll);
			if (http_request.readyState == 4) {
				if (http_request.status == 200) {
				    if(urll=="vip.php"||urll=="list.php"||urll=="tuijian.php"||urll=="MV.php"||urll=="myinfo.php") document.getElementById("cen1").innerHTML=http_request.responseText;
                    else if(result){
                        alert("收藏成功！");}
                    else if(result1){alert("修改成功！");}
                    else if(result2){alert("删除成功！");}
					else document.getElementById("cen").innerHTML=http_request.responseText;}
					
				else {
					alert('您请求的页面发现错误');
				}
			}
		}
        function selmusic(url){
            var player=document.getElementById("player");
            player.src=url;
        }
        function chaxun()
        {
            var cha=document.getElementById("chaxun");
            var chava=cha.value;
            var chaval="query.php?find="+chava;
            creatRequest(chaval);
        }
        function change() {
            var value = document.getElementById('a').value ;
            document.getElementById('value').innerHTML = value;
        }
        function cliche() {
                var checked = document.getElementById("check").checked;
                var checkson = document.getElementsByName("zt");
                if(checked){
                    for(var i = 0; i < checkson.length ;i++){
                        checkson[i].checked = true;
                    }
                }else{
                    for(var i = 0; i < checkson.length ;i++){
                        checkson[i].checked = false;
                    }
                }
        }
        function coll(str,str1){
            var us="<?php echo $us ?>";
            if(us){
                var hr="collection.php?muid="+str1;
                creatRequest(hr);
            }
            else {alert("请先登录！");location.href='index.php';}
        }
        function delll(str,str1){
            var us="<?php echo $us ?>";
            if(us){
                var hr="del.php?muid="+str1;
                creatRequest(hr);
            }
            else {alert("请先登录！");location.href='index.php';}
        }
</script>
</html>