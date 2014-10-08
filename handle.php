<?php
session_start();
$real_name=$HTTP_SESSION_VARS["admin_enter"];
if(!session_is_registered("admin_enter")||$real_name!="correct"){
	Header("Location:admin.inc.php");
	exit;
}		//如果身份验证没有通过
include ("common.inc.php");
mysql_select_db($dbname,$connect);
$id=$HTTP_GET_VARS["id"];
$delete=$HTTP_GET_VARS["delete"];
$reply=$HTTP_GET_VARS["reply"];
echo "<title>留言薄管理——删除记录</title>";
echo $welcome_message;
if($id){
	if($delete){			// 删除一条记录
	$sql = "DELETE FROM guestbook WHERE id=$id"; 
    $result = mysql_query($sql);
	if($result){
    echo "记录删除成功！自动返回，请稍候……";
	echo $back_to_manage;
	}
	else{		//当删除失败时		
		echo "记录删除失败！自动返回，请稍候……<br>";
		echo $back_to_manage;
		}
	}
	if($reply){
	echo $back_to_manage;
	echo "抱歉,回复功能目前尚没有具备<br>";//以后这里添加回复功能
	}
	if(!$delete&&!$reply){			//如果选择了某条留言并且没有选择操作
		echo "您选择的是第 <font color='#ff0000'><b>".$id."</b></font> 条记录<br>";
		echo "<table width='550' border='0' align='center'><tr><td width='100'><font size='2' color='#ee00dd'><b>请选择操作=></b></font></td><td><div align='center'><font size='2'>";
		printf ("<a href=\"%s?id=%s&delete=yes\">删除</a></font></div></td>",$PATH_INFO, $id);
		echo "<td><div align='center'><font size='2'>回复</font></div></td>";
		echo "<td><div align='center'><font size='2'><a href=\"javascript:location.reload()\" target=\"_self\">刷新</a></font></div></td></tr></table>";
	}
}
else{
	echo "<meta http-equiv=\"refresh\" content=\"1; url=manage.php\" gb2312\"\">";
	echo "对不起，您没有选择任何记录！";
}
require("copyright.php");
?>