<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<div id="div1" style="	background-image: url(img/p1.png);
	background-repeat: no-repeat;">
  <div id="div2" style="background-image: url(img/p2.png);
	background-repeat: no-repeat;">
    <div id="div3">
      <p class="word1">我的歌单</p>
      <p>&nbsp;</p>
      <p class="word2">标签：周杰伦</p>
      <p class="word2">简介：暂无简介</p>
      <form name="form1" method="post" action="">
        <input name="播放" type="submit" class="submit1" id="播放" value="播放">
      </form>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<div id="div4">
    <div style="margin:40px 0;">
        <table width="100%" cellpadding="1" cellspacing="1" bgcolor="#fffff">
            <tr align="center" bgcolor="#f0f0f0" height="60px">
                <td width="40%"  style="font-size: 20px;">歌曲名称</td>
                <td width="20%"  style="font-size: 20px;">歌手</td>
                <td width="20%"  style="font-size: 20px;">歌曲时长</td>
                <td width="20%"  style="font-size: 20px;">删除</td>
            </tr>
            <?php
            session_start();
            include("conn.php");
            $us=$_SESSION['userid'];
            $sql=mysqli_query($link,"select * from songs where Sid in (select Sid from collect where Uid = '".$us."')");
            $row=mysqli_fetch_object($sql);
            if(!$row){
                echo"<font color='red'>暂无歌曲！</font>";
            }else{
                do{
                    ?>
                    <tr bgcolor="#ddd" height="50px" style="border-bottom: 1px solid #fff">
                        <td style="font-size: 15px; text-align: center;"><a style="cursor:pointer;text-decoration: none;color: black" onclick="selmusic('<?php echo $row->Slink;?>')"><?php echo $row->Sname;?></a></td>
                        <td style="font-size: 15px;text-align: center;"><a><?php echo $row->singer;?></a></td>
                        <td  style="font-size: 15px;text-align: center;"><a><?php echo $row->Stime;?></a></td>
                        <td  style="font-size: 15px;text-align: center;"><a style="cursor: pointer;" id="collection" onclick="delll('collection','<?php echo $row->Sid;?>')">删除</a></td>
                    </tr>
                    <?php
                }while($row=mysqli_fetch_object($sql));
            }
            mysqli_free_result($sql);
            mysqli_close($link);
            ?>
        </table>
        <div style="margin:40px 0;">
            <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=100% height=86 src="https://music.163.com/outchain/player?type=2&id=3019754&auto=0&height=66" id="player" class="navi" ></iframe>
        </div>
    </div>
</div>
<div class="footer">
    音乐资源全来自于网易云音乐
</div>
</body>
</html>
