<?php
session_start();
$admin_name="Admin";		//����Ա����
$admin_pass="12345";		//����Ա����
$not_pass_message="<title>���Ա�������������</title>\n<script language=\"javascript\">\nfunction confirm_back(){\nif (confirm(\"������ҳ?\")){\nwindow.location=\"guestbook.php\";\nreturn true;\n}\nreturn false;\n}\n</script>\n<p>&nbsp;</p><div align=\"center\"><font color=\"#FF0000\">����:����û��ͨ�������֤��<br></font></div><form name=\"form1\" method=\"post\" action=\"".$path_info."\"><p align=\"center\">����Ա:<input type=\"text\" name=\"name\"  value=\"Admin\" size=\"15\" maxlength=\"15\" onmouseover=\"focus();select();\"><br>�ܡ���:<input type=\"password\" name=\"pass\" size=\"15\" maxlength=\"15\" onmouseover=\"focus();select();\"></p><p align=\"center\"><input type=\"submit\" name=\"submit\" value=\"�� ½\">��<input type=\"reset\" name=\"reset\" value=\"�� ��\">��<input type=\"button\" name=\"back\" value=\"�� ��\"  onclick=\"confirm_back();\"></p></form>";		//��û��ͨ�������֤ʱ��ʾ��ҳ��
$welcome_message="<p align=\"center\"><font color=\"#9933FF\" size=\"5\" face=\"����_GB2312\"><font size=\"6\"><b>��ӭ����Ա,Ŀǰ<font color=\"#FF0000\">��</font>��½��</b></font></font></p>";			//��ͨ�������֤ʱ��ʾ����Ϣ
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