<?php
//注意，本程序建表“guestbook”，请不要修改此名字，否则以后的程序都会出错！切记切记！
include ("common.inc.php");
$address="516730405@qq.com";
$subject="恭喜，有人使用您的留言薄啦！";
$message="您好！现在您收到的是从留言薄上发送来的消息,说明有人使用您的留言薄,谢谢！";
$other="注意:这封信没有回复地址\n";
if($connect){		//开始连接
	mysql_select_db($dbname,$connect);
	$create_table_guestbook="CREATE TABLE `guestbook` (
	`id` TINYINT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`nickname` VARCHAR(50) NOT NULL,
	`email` VARCHAR(20) NOT NULL, 
	`qq` double NOT NULL default '0',
	`date` VARCHAR(25) NOT NULL default '没有记录',
	`ip` VARCHAR(15) NOT NULL, 
	`show_ip` TINYINT(1) NOT NULL default '0',
	`title` VARCHAR(50) NOT NULL, 
	`content` text NOT NULL, 
	UNIQUE (`id`)
	)";
	if(mysql_query($create_table_guestbook)){
		@mail($address,$subject,$message,$other);
		echo "<div align='center'><p><img src='images/ok.gif'></p><font color='#336600' size='4'  face='楷体_GB2312'><b>祝贺您，建表成功！<br></b></font></div><a href=\"guestbook.php\">转到留言薄</a>";
		exit();
	}
	else echo "建表失败！<br>可能原因：<br>1.您在common.inc.php中的设置不正确<br>2.已经建立了数据表guestbook<br> 3.其他可能的原因.";
}
else echo $connect_error_message;//处理连接失败的情况
?>