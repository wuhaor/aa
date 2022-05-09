<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">
#div1 {
	height: 1000px;
	width: 80%;
	margin-right: auto;
	margin-left: auto;
	border: 1px solid #CCC;
}
#div2 {
	height: 400px;
	width: 88%;
	margin-right: auto;
	margin-left: auto;
	margin-top: 35px;
	border: 1px solid #999;
}
#div3 {
	height: 440px;
	width: 88%;
	margin-top: 60px;
	margin-right: auto;
	margin-left: auto;
}
.p1 {
	font-family: "微软雅黑";
	font-size: 30px;
	line-height: 16px;
}
#div4 {
	height: 400px;
	width: 100%;
	border-top-width: 3px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #000;
	border-right-color: #666;
	border-bottom-color: #666;
	border-left-color: #666;
}
#td1 {
	font-family: "微软雅黑";
	font-size: 25px;
}
.td2 {
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #666;
	font-family: "微软雅黑";
	font-size: 18px;
	color: #666;
	text-align: center;
}
.submit1{
	width: 80px;
	height: 40px;
	border-radius: 20px;
	border: 1px solid #F00;
	color: #F00;
	background-color: #FFF;
	margin-left: 20px;
}
</style>
</head>

<body>
<?php
include("conn.php");
session_start();
$us = $_SESSION['userid'];
$s = mysqli_query($link,"select * from users where Uid = '".$us."'");
$row = mysqli_fetch_object($s);
?>
<div id="div1">
  <div id="div2">
    <table width="100%" height="400" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="400" rowspan="8" align="center"><img src="img/i1.png" width="300" height="297"></td>
        <td height="45" colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="75" colspan="4" id="td1"><?php echo $row->Uname ?>🎵   <input name="button" type="submit" class="submit1" id="button" value="Lv.8"></td>
      </tr>
      <tr>
        <td width="105" height="38" class="td2">125</td>
        <td width="105" class="td2">188</td>
        <td width="105" class="td2">1314</td>
        <td rowspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="38" class="td2">动态</td>
        <td class="td2">关注</td>
        <td class="td2">粉丝</td>
      </tr>
      <tr>
        <td height="55" colspan="4">个人介绍：“美人卷珠帘，万径人踪灭”</td>
      </tr>
      <tr>
        <td height="55" colspan="4">所在地区：重庆</td>
      </tr>
      <tr>
        <td height="55" colspan="4">社交网络：QQ，微信</td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
    </table>
  </div>
  <div id="div3">
  <p class="p1">&nbsp;&nbsp;&nbsp;&nbsp;听歌排行</p>
    <div id="div4">
    <form action="" method="get">
    <table width="100%" height="381" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="8%" align="center">1.</td>
    <td width="5%"><input type="submit" name="button2" id="button2" value="▶"></td>
    <td width="87%">Thin Air - Equador</td>
  </tr>
  <tr bgcolor="#999999">
    <td align="center" bgcolor="#CCCCCC">2.</td>
    <td bgcolor="#CCCCCC"><input type="submit" name="button3" id="button3" value="▶"></td>
    <td bgcolor="#CCCCCC">Every Breath You Take (Deep Chills Remix) - Deep Chills</td>
  </tr>
  <tr>
    <td align="center">3.</td>
    <td><input type="submit" name="button4" id="button4" value="▶"></td>
    <td>Joey - Concrete Blonde</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC">4.</td>
    <td bgcolor="#CCCCCC"><input type="submit" name="button5" id="button5" value="▶"></td>
    <td bgcolor="#CCCCCC">Love Story (Taylor's Version) - Taylor Swift</td>
  </tr>
  <tr>
    <td align="center">5.</td>
    <td><input type="submit" name="button6" id="button6" value="▶"></td>
    <td>Zombie - The Cranberries</td>
  </tr>
</table>

    </form>
    </div>
  </div>
</div>
<div class="footer">
    音乐资源全来自于网易云音乐
</div>
</body>
</html>
