<?php			//���幫�õģ��û�������������ݿ���
$dbserver="localhost";		//Mysql������,��Ϊ���Լ���
$username="root";			//Mysql�û���,��Ϊ���Լ���
$userpass="111111";				//Mysql����,��Ϊ���Լ���
$dbname="myguest";			//Mysql���ݿ���,��Ϊ���Լ���
@$connect=mysql_connect($dbserver,$username,$userpass);//��ʼ�������ݿ�,���������ʧ��ʱ����ʾMysql�Ĵ�����Ϣ�����ڴ�����ǰ���һ��"@"���ţ����������ţ���
$connect_error_message="<title>��������</title><div align='center'><p><img src='images/sorry.gif'></p><font color='#ff0000' size='2'>�������ݿ�ʧ�ܣ������ԣ�</font><br></div>";//�������ݿ�ʧ��ʱҪ��ʾ�ĳ�����Ϣ
$db_not_found="<p>&nbsp;</p><p>����û�з������ݿ�<font color='#ff0000'>".$dbname."</font></p>��������<font color='#ff0000'>common.inc.php</font>�е����ã�";		//û���ҵ����ݿ�ʱҪ��ʾ�ĳ�����Ϣ
$welcome_message="<p align=\"center\"><font color=\"#9933FF\" size=\"5\" face=\"����_GB2312\"><font size=\"6\"><b>��ӭ����Ա,Ŀǰ<font color=\"#FF0000\">��</font>��½��</b></font></font></p>";			//��ͨ�������֤ʱ��ʾ����Ϣ
$back_to_manage="<meta http-equiv=\"refresh\" content=\"1; url=manage.php\" gb2312\"\">";		//����������ת��manage.php
$history_back="<a href=\"javascript:history.back(1)\">����</a>";
?>