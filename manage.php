<?php
session_start();
$real_name=$HTTP_SESSION_VARS["admin_enter"];
if(!session_is_registered("admin_enter")||$real_name!="correct"){
	Header("Location:admin.inc.php");
	exit;
}		//如果身份验证没有通过
include ("common.inc.php");
if($connect){
	echo "<title>留言薄管理</title>";
	mysql_select_db($dbname,$connect);
	echo $welcome_message;
	$name_result = mysql_list_tables ($dbname);
	if(!$name_result){
		echo $db_not_found;
		
	}		//处理用户设置数据库错误的情况
	$id=$HTTP_GET_VARS["id"];
	if($id){
		$result=mysql_query("select * from guestbook where id=$id",$connect);
		$myrow=mysql_fetch_array($result,$connect);
		include ("show_each_record.inc.php");
		showrecord($myrow);			//此行显示第$id行记录
		echo "<br>";
		printf ("<div align=\"center\"><a href=\"handle.php?id=%s\">对这条记录进行操作</a></div>",$id);		//选择操作
	}
	else{
		$result=mysql_query("select * from guestbook",$connect);
		@$num=mysql_num_rows($result);
		if($num){//显示数据的名字行
		include ("backcolor.inc.php");
			echo "<table align='center'><tr bgcolor='#D0DCE0'><td><div align='center'><font size='2' color='#CC0000'>记录</font></div></td><td><div align='center'><font size='2' color='#CC0000'>昵称</font></div></td><td><div align='center'><font size='2' color='#CC0000'>电子邮件</font></div></td><td><div align='center'><font size='2' color='#CC0000'>QQ</font></div></td><td><div align='center'><font size='2' color='#CC0000'>来访时间</font></div></td><td><div align='center'><font size='2' color='#CC0000'>IP地址</font></div></td><td><div align='center'><font size='2' color='#CC0000'>主题</font></div></td><td><div align='center'><font size='2' color='#CC0000'>留言内容</font></div></td><td><div align='center'><font size='2' color='#CC0000'>操作</font></div></td></tr>";
			for($i=0;$i<$num;$i++){
			$myrow=mysql_fetch_array($result,$connect);
			echo "<tr bgcolor=".mycolor($i)."><td><font size='2'><a href=\"".$path_info."?id=".$myrow["id"]."\">".$myrow["id"]."</a></font></td>";//隔行使用不同的背景色并且链接不同的ID号
			echo "<td><font size='2'>".$myrow["nickname"]."</font></td>";
			echo "<td><font size='2'><a href=\"mailto:".$myrow["email"]."\">".$myrow["email"]."</a></font></td>";
			echo "<td><font size='2'>".$myrow["qq"]."</font></td>";
			echo "<td><font size='2'>".$myrow["date"]."</font></td>";
			echo "<td><font size='2'>".$myrow["ip"]."</font></td>";
			echo "<td><font size='2'>".$myrow["title"]."</font></td>";
			echo "<td><font size='2'>".$myrow["content"]."</font></td>";
			printf ("<td><font size='2'><a href=\"handle.php?id=%s\">操作</a></font></td>",$myrow["id"]);	//此处删除记录
			echo "</tr>";
			}
			echo "</table>";
			}
		else {
			echo "<p>对不起，目前还没有任何留言！</p>";
			}
	}
	echo "<br><div align='center'><font size='2'><a href=\"javascript:history.back(1)\">返回</a>　　　<a href=\"manage_exit.php\">退出</a>　　　<a href='javascript:self.close();'>关闭窗口</a></font></div>";
	require("copyright.php");
  }
else echo $connect_error_message;
?>