<?php
session_start();
$bye=session_is_registered("admin_enter");	//�������Ƿ���ע��
if($bye){
	session_unregister("admin_enter");
	session_destroy();
	echo "<meta http-equiv=\"refresh\" content=\"2; url=guestbook.php\" gb2312\"\">";
	echo "���Ѿ��ɹ��˳���½�������Զ�ת�����Ա������Ժ򡭡�";
}
else{
	echo "<meta http-equiv=\"refresh\" content=\"1; url=admin.inc.php\" gb2312\"\">";
	echo "��������û�е�½����ͨ�������������룡";
}
?>