<?php
session_start();
$real_name=$HTTP_SESSION_VARS["admin_enter"];
if(!session_is_registered("admin_enter")||$real_name!="correct"){
	Header("Location:admin.inc.php");
	exit;
}		//��������֤û��ͨ��
include ("common.inc.php");
mysql_select_db($dbname,$connect);
$id=$HTTP_GET_VARS["id"];
$delete=$HTTP_GET_VARS["delete"];
$reply=$HTTP_GET_VARS["reply"];
echo "<title>���Ա�������ɾ����¼</title>";
echo $welcome_message;
if($id){
	if($delete){			// ɾ��һ����¼
	$sql = "DELETE FROM guestbook WHERE id=$id"; 
    $result = mysql_query($sql);
	if($result){
    echo "��¼ɾ���ɹ����Զ����أ����Ժ򡭡�";
	echo $back_to_manage;
	}
	else{		//��ɾ��ʧ��ʱ		
		echo "��¼ɾ��ʧ�ܣ��Զ����أ����Ժ򡭡�<br>";
		echo $back_to_manage;
		}
	}
	if($reply){
	echo $back_to_manage;
	echo "��Ǹ,�ظ�����Ŀǰ��û�о߱�<br>";//�Ժ�������ӻظ�����
	}
	if(!$delete&&!$reply){			//���ѡ����ĳ�����Բ���û��ѡ�����
		echo "��ѡ����ǵ� <font color='#ff0000'><b>".$id."</b></font> ����¼<br>";
		echo "<table width='550' border='0' align='center'><tr><td width='100'><font size='2' color='#ee00dd'><b>��ѡ�����=></b></font></td><td><div align='center'><font size='2'>";
		printf ("<a href=\"%s?id=%s&delete=yes\">ɾ��</a></font></div></td>",$PATH_INFO, $id);
		echo "<td><div align='center'><font size='2'>�ظ�</font></div></td>";
		echo "<td><div align='center'><font size='2'><a href=\"javascript:location.reload()\" target=\"_self\">ˢ��</a></font></div></td></tr></table>";
	}
}
else{
	echo "<meta http-equiv=\"refresh\" content=\"1; url=manage.php\" gb2312\"\">";
	echo "�Բ�����û��ѡ���κμ�¼��";
}
require("copyright.php");
?>