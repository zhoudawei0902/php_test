<?php			//在有人留言时发送信件给主人
$address="cube316@etang.com";		//改为您自己的信箱
$subject="有人在您的留言薄上留言啦！";		//信件主题
$message="您好！现在您收到的是从留言薄上发送来的消息，请见到后速去留言薄查看，谢谢！\n\n\n如果本留言薄出现问题或者您有任何建议和意见，请联系cube316@etang.com,谢谢使用！";		//信件内容
$other="注意:这封信没有回复地址\n";		//其他信息
$mail_send="Off";		//如果不想收到邮件，请改为Off
$nickname=$HTTP_POST_VARS["nickname"];
$qq=$HTTP_POST_VARS["qq"];
$email=$HTTP_POST_VARS["email"];
$ip=getenv("REMOTE_ADDR");
$show_ip=$HTTP_POST_VARS["select"];
$date=date("Y年m月d日H点i分");
$title=$HTTP_POST_VARS["title"];
$content=$HTTP_POST_VARS["content"];

		//此处需要填加输入内容正确性的检查语句

require ("common.inc.php");
if($connect){			//如果数据库连接成功，则向数据库中写入数据
	mysql_select_db($dbname,$connect);
	$sql = "INSERT INTO `guestbook` (`id`,`nickname`,`email`,`qq`,`date`,`ip`,`show_ip`,`title`,`content`)
	VALUES ('','$nickname','$email','$qq','$date','$ip','$show_ip','$title','$content')";
    $result = mysql_query($sql);
	if($result){
	echo "<div align=\"center\"><img src='images/ok.gif'><br><p><font size=\"5\" face=\"楷体_GB2312\"><b><font color=\"#FF0000\">留言成功！</font></b></font></p>  <p><font size=\"2\">请等待3秒钟，程序将自动转到留言板页面……<br><a href=\"guestbook.php\">或者您可以点这里马上访问</a></font></p></div><meta http-equiv=\"refresh\" content=\"2; url=guestbook.php\" gb2312\"\">";
		if($mail_send=="On"){		//开启邮件发送服务
		if(@mail($address,$subject,$message,$other)){
		echo "一封邮件已经发出，相信留言薄的主人可以很快收到消息！<br>";
		}
		else echo("抱歉，邮件通知主人功能没有实现！");
		}
		else echo("此留言薄的邮件通知主人功能没有开启！");
	}
	else
	echo("<div align='center'><p><img src='images/sorry.gif'></p><font color='#FF0000' size='4'  face='楷体_GB2312'><b>对不起，留言失败，请重试！</b></font><a href=\"javascript:history.back(1)\">返回</a></div>");
}
else echo $connect_error_message;		//处理连接失败的情况
?>