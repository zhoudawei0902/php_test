<?php
session_start();
$real_name=$HTTP_SESSION_VARS["admin_enter"];
if(!session_is_registered("admin_enter")||$real_name!="correct"){
	Header("Location:admin.inc.php");
	exit;
}		//��������֤û��ͨ��
include ("common.inc.php");
if($connect){
	echo "<title>���Ա�����</title>";
	mysql_select_db($dbname,$connect);
	echo $welcome_message;
	$name_result = mysql_list_tables ($dbname);
	if(!$name_result){
		echo $db_not_found;
		
	}		//�����û��������ݿ��������
	$id=$HTTP_GET_VARS["id"];
	if($id){
		$result=mysql_query("select * from guestbook where id=$id",$connect);
		$myrow=mysql_fetch_array($result,$connect);
		include ("show_each_record.inc.php");
		showrecord($myrow);			//������ʾ��$id�м�¼
		echo "<br>";
		printf ("<div align=\"center\"><a href=\"handle.php?id=%s\">��������¼���в���</a></div>",$id);		//ѡ�����
	}
	else{
		$result=mysql_query("select * from guestbook",$connect);
		@$num=mysql_num_rows($result);
		if($num){//��ʾ���ݵ�������
		include ("backcolor.inc.php");
			echo "<table align='center'><tr bgcolor='#D0DCE0'><td><div align='center'><font size='2' color='#CC0000'>��¼</font></div></td><td><div align='center'><font size='2' color='#CC0000'>�ǳ�</font></div></td><td><div align='center'><font size='2' color='#CC0000'>�����ʼ�</font></div></td><td><div align='center'><font size='2' color='#CC0000'>QQ</font></div></td><td><div align='center'><font size='2' color='#CC0000'>����ʱ��</font></div></td><td><div align='center'><font size='2' color='#CC0000'>IP��ַ</font></div></td><td><div align='center'><font size='2' color='#CC0000'>����</font></div></td><td><div align='center'><font size='2' color='#CC0000'>��������</font></div></td><td><div align='center'><font size='2' color='#CC0000'>����</font></div></td></tr>";
			for($i=0;$i<$num;$i++){
			$myrow=mysql_fetch_array($result,$connect);
			echo "<tr bgcolor=".mycolor($i)."><td><font size='2'><a href=\"".$path_info."?id=".$myrow["id"]."\">".$myrow["id"]."</a></font></td>";//����ʹ�ò�ͬ�ı���ɫ�������Ӳ�ͬ��ID��
			echo "<td><font size='2'>".$myrow["nickname"]."</font></td>";
			echo "<td><font size='2'><a href=\"mailto:".$myrow["email"]."\">".$myrow["email"]."</a></font></td>";
			echo "<td><font size='2'>".$myrow["qq"]."</font></td>";
			echo "<td><font size='2'>".$myrow["date"]."</font></td>";
			echo "<td><font size='2'>".$myrow["ip"]."</font></td>";
			echo "<td><font size='2'>".$myrow["title"]."</font></td>";
			echo "<td><font size='2'>".$myrow["content"]."</font></td>";
			printf ("<td><font size='2'><a href=\"handle.php?id=%s\">����</a></font></td>",$myrow["id"]);	//�˴�ɾ����¼
			echo "</tr>";
			}
			echo "</table>";
			}
		else {
			echo "<p>�Բ���Ŀǰ��û���κ����ԣ�</p>";
			}
	}
	echo "<br><div align='center'><font size='2'><a href=\"javascript:history.back(1)\">����</a>������<a href=\"manage_exit.php\">�˳�</a>������<a href='javascript:self.close();'>�رմ���</a></font></div>";
	require("copyright.php");
  }
else echo $connect_error_message;
?>