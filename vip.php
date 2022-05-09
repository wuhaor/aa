
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <title>VIP</title>
</head>
<body>
<div id="vd1">
       <img src="img/vip1.jpg">
</div>
<div id="vd3">
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tb1">
  <tr>
    <td width="33%" height="100" align="center" class="p1">功能特权</td>
    <td width="33%" height="100" align="center" class="p1">豪华会员</td>
    <td width="33%" height="100" align="center" class="p1">音乐包</td>
  </tr>
  <tr>
    <td width="33%" height="50" align="center" bgcolor="#FBF9F8">会员曲库</td>
    <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip2.png"></td>
    <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip2.png"></td>
  </tr>
  <tr>
    <td width="33%" height="50" align="center">无损音质</td>
    <td width="33%" height="50" align="center"><img src="img/vip2.png"></td>
    <td width="33%" height="50" align="center"><img src="img/vip2.png"></td>
  </tr>
  <tr>
    <td width="33%" height="50" align="center" bgcolor="#FBF9F8">下载特权</td>
    <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip2.png"></td>
    <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip2.png"></td>
  </tr>
  <tr>
    <td width="33%" height="50" align="center">尊贵图标</td>
    <td width="33%" height="50" align="center"><img src="img/vip2.png"></td>
    <td width="33%" height="50" align="center"><img src="img/vip2.png"></td>
  </tr>
  <tr>
    <td width="33%" height="50" align="center" bgcolor="#FBF9F8">个性主题</td>
    <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip2.png"></td>
    <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip3.png"></td>
  </tr>
    <tr>
        <td width="33%" height="50" align="center">VIP音效</td>
        <td width="33%" height="50" align="center"><img src="img/vip2.png"></td>
        <td width="33%" height="50" align="center"><img src="img/vip3.png"></td>
    </tr>
    <tr>
        <td width="33%" height="50" align="center" bgcolor="#FBF9F8">广告特权</td>
        <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip2.png"></td>
        <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip3.png"></td>
    </tr>
    <tr>
        <td width="33%" height="50" align="center">弹幕气泡</td>
        <td width="33%" height="50" align="center"><img src="img/vip2.png"></td>
        <td width="33%" height="50" align="center"><img src="img/vip3.png"></td>
    </tr>
    <tr>
        <td width="33%" height="50" align="center" bgcolor="#FBF9F8">铃声特权</td>
        <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip2.png"></td>
        <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip3.png"></td>
    </tr>
    <tr>
        <td width="33%" height="50" align="center">海报字体</td>
        <td width="33%" height="50" align="center"><img src="img/vip2.png"></td>
        <td width="33%" height="50" align="center"><img src="img/vip3.png"></td>
    </tr>
    <tr>
        <td width="33%" height="50" align="center" bgcolor="#FBF9F8">生日特权</td>
        <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip2.png"></td>
        <td width="33%" height="50" align="center" bgcolor="#FBF9F8"><img src="img/vip3.png"></td>
    </tr>
    <tr>
        <td width="33%" height="50" align="center">个性音乐</td>
        <td width="33%" height="50" align="center"><img src="img/vip2.png"></td>
        <td width="33%" height="50" align="center"><img src="img/vip3.png"></td>
    </tr>
</table>
    <div id="vd4">
        <form oninput="x.value=parseInt(a.value)*parseInt(b.value)" class="f1">
            请选择充值多少月：<input type="range" id="a" value="0" max="12" min="0" step="1" oninput="change()" onchange="change()">
            <span id="value">0</span>
            (0-12)
            <input id="b" type="text" list="sexlist">
            <datalist id="sexlist">
                <option value="15RMB">豪华会员</option>
                <option value="8RMB">音乐包</option>
            </datalist>
            =<output name="x" for="a b"></output>
            <p id="pp1"><input type="submit" value="提交" style="width: 60px;font-size: 20px;background-color: #999999"></p>
        </form>
    </div>
    <div id="vd5">
        <p>
            <span><img src="img/vd1.jpeg"></span>
            <span><img src="img/vd2.jpeg"></span>
        </p>
        <p>
            <span><img src="img/vd3.jpeg"></span>
            <span><img src="img/vd4.jpeg"></span>
        </p>
    </div>
</div>
<div class="footer">
    音乐资源全来自于网易云音乐
</div>
</body>

</html>