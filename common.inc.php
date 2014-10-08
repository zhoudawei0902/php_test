<?php			//定义公用的，用户名，密码和数据库名
$dbserver="localhost";		//Mysql主机名,改为您自己的
$username="root";			//Mysql用户名,改为您自己的
$userpass="111111";				//Mysql密码,改为您自己的
$dbname="myguest";			//Mysql数据库名,改为您自己的
@$connect=mysql_connect($dbserver,$username,$userpass);//开始连接数据库,如果在连接失败时不显示Mysql的错误信息，请在此行最前面加一个"@"符号（不包括引号！）
$connect_error_message="<title>出错啦！</title><div align='center'><p><img src='images/sorry.gif'></p><font color='#ff0000' size='2'>连接数据库失败，请重试！</font><br></div>";//连接数据库失败时要显示的出错信息
$db_not_found="<p>&nbsp;</p><p>错误！没有发现数据库<font color='#ff0000'>".$dbname."</font></p>请检查您在<font color='#ff0000'>common.inc.php</font>中的设置！";		//没有找到数据库时要显示的出错信息
$welcome_message="<p align=\"center\"><font color=\"#9933FF\" size=\"5\" face=\"楷体_GB2312\"><font size=\"6\"><b>欢迎管理员,目前<font color=\"#FF0000\">已</font>登陆！</b></font></font></p>";			//当通过身份验证时显示的消息
$back_to_manage="<meta http-equiv=\"refresh\" content=\"1; url=manage.php\" gb2312\"\">";		//操作后重新转向到manage.php
$history_back="<a href=\"javascript:history.back(1)\">返回</a>";
?>