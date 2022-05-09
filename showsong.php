<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
    <?php
    include("conn.php");
    $aid = $_GET['id'];
    $s = mysqli_query($link,"select * from album where Aid = '".$aid."'");
    $row = mysqli_fetch_object($s);
    ?>
    <div class="imjian">
        <div class="imgrq"><img src="<?php echo $row->adress?>" class="imgshow img-responsive"></div>
        <div style="float: left">
            <h1 style="font-size: 40px"><?php echo $row->Ainfo;?></h1>
            <h3 class="sfont">标签：<?php echo $row->Aname ?></h3>
            <h3 class="sfont">创建日期：<?php echo $row->Adate ?></h3>
            <form class="for">
                <button class="btn btn-success btnn">全部播放</button>
                <button type="submit" class="btn btn-info btnn">收藏</button>
            </form>
        </div>
    </div>
<div style="margin:40px 0;">
						<table width="100%" cellpadding="1" cellspacing="1" bgcolor="#fffff">
							<tr align="center" bgcolor="#f0f0f0" height="60px">
								<td width="40%"  style="font-size: 20px;">歌曲名称</td>
								<td width="20%"  style="font-size: 20px;">歌手</td>
								<td width="20%"  style="font-size: 20px;">歌曲时长</td>
								<td width="20%"  style="font-size: 20px;">收藏</td>
							</tr>
							<?php
								$sql=mysqli_query($link,"select * from songs where Aid = '".$aid."'");
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
											<td  style="font-size: 15px;text-align: center;"><a style="cursor: pointer;" id="collection" onclick="coll('collection','<?php echo $row->Sid;?>')">收藏</a></td>
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
	</body>
</html>
