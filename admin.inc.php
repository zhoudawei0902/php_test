<?php
session_start();
$admin_name="Admin";		//管理员名字
$admin_pass="12345";		//管理员密码
$not_pass_message="<title>留言薄管理【验明正身】</title>\n<script language=\"javascript\">\nfunction confirm_back(){\nif (confirm(\"返回首页?\")){\nwindow.location=\"guestbook.php\";\nreturn true;\n}\nreturn false;\n}\n</script>\n<p>&nbsp;</p><div align=\"center\"><font color=\"#FF0000\">警告:您还没有通过身份验证！<br></font></div><form name=\"form1\" method=\"post\" action=\"".$path_info."\"><p align=\"center\">管理员:<input type=\"text\" name=\"name\"  value=\"Admin\" size=\"15\" maxlength=\"15\" onmouseover=\"focus();select();\"><br>密　码:<input type=\"password\" name=\"pass\" size=\"15\" maxlength=\"15\" onmouseover=\"focus();select();\"></p><p align=\"center\"><input type=\"submit\" name=\"submit\" value=\"登 陆\">　<input type=\"reset\" name=\"reset\" value=\"重 置\">　<input type=\"button\" name=\"back\" value=\"返 回\"  onclick=\"confirm_back();\"></p></form>";		//当没有通过身份验证时显示的页面
$welcome_message="<p align=\"center\"><font color=\"#9933FF\" size=\"5\" face=\"楷体_GB2312\"><font size=\"6\"><b>欢迎管理员,目前<font color=\"#FF0000\">已</font>登陆！</b></font></font></p>";			//当通过身份验证时显示的消息
$user_name=$HTTP_POST_VARS["name"];
$user_pass=$HTTP_POST_VARS["pass"];
if($user_name!=$admin_name||$user_pass!=$admin_pass){
	echo $not_pass_message;
	exit;
}
else{
	$admin_enter="correct";
	session_register("admin_enter");
	echo "<meta http-equiv=\"refresh\" content=\"0; url=manage.php\" gb2312\"\">";
	}
?>