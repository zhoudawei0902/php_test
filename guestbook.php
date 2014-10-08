<title>雁过留痕</title>
<table width="550" border="0" align="center"><tr><td>
<div align='center'><p><img src='images/guestbook.gif'></p></div></td></tr>
<tr><td><font size='2'>
<?php
$counterFile =  "counter.txt";
function displayCounter($counterFile) {
  $fp     = fopen($counterFile,"rw");
  $num    = fgets($fp,5);
  $num    += 1;
  echo  "您是第<font color=#FF00FF><b> ".$num." </b></font>位参观者";
  exec( "rm -rf $counterFile");
  exec( "echo $num > $counterFile");
}
if (!file_exists($counterFile)) {
  exec( "echo 0 > $counterFile");
}
displayCounter($counterFile);
?>
　　　<a href='index.php'>返回首页</a>　　<a href='guestadd.php'>留言请进</a>　　<a href='manage.php'>管理员专用</a></font><br></td></tr>
<tr><td><?php
include ("common.inc.php");//引用公用文件连接数据库
if($connect){
	$name_result = mysql_list_tables ($dbname);
	if(!$name_result){
		echo $db_not_found;
		exit;
	}		//处理用户设置数据库错误的情况
	$i = 0;
	$judge=0;
	while ($i < mysql_num_rows ($name_result)) {
    $tb_names[$i] = mysql_tablename ($name_result, $i);
	if($tb_names[$i]=="guestbook"){
		$judge=1;
		break;}
		$i++;
	}
	if($judge==0){
		echo "<div align='center'><p><img src='images/sorry.gif'></p><font color='#336600' size='3'  face='楷体_GB2312'><b>对不起，目前还没有建立数据表guestbook，请联系管理员！</b></font><a href='mailto:cube316@etang.com?subject=没有建立数据表guestbook'><font size='2' color='#ff0000'>马上联系</font></a></div><br>";
		exit();
	}				//以上检查表guestbook是否存在
	mysql_select_db($dbname,$connect);
	$result=mysql_query("select * from guestbook",$connect);
	$num=mysql_num_rows($result);
	echo "<font size='2'>共有留言 <font color=#FF00FF><b>".$num." </b></font>条</font><br>";//显示留言数目，待更新，加入分页及跳转功能
	if($num==0)								//检查数据库中有无记录
	echo("<div align='center'><p><img src='images/sorry.gif'></p><font color='#336600' size='3'  face='楷体_GB2312'><b>对不起，目前还没有任何留言，您要开个头吗？</b></font><a href='guestadd.php'><font size='4'>ok</font></a></div>");
		//如果记录为零，则不显示任何内容
	else{
		include ("show_each_record.inc.php");
		for($i=1;$i<=$num;$i++){
		$row=mysql_fetch_array($result);		
		showrecord($row);		
	}
	}
}
else echo $connect_error_message;//处理连接失败的情况
?>
</td></tr></table>
<?php require("copyright.php");?>
</body>