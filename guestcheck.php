<?php			//����������ʱ�����ż�������
$address="cube316@etang.com";		//��Ϊ���Լ�������
$subject="�������������Ա�����������";		//�ż�����
$message="���ã��������յ����Ǵ����Ա��Ϸ���������Ϣ�����������ȥ���Ա��鿴��лл��\n\n\n��������Ա�����������������κν�������������ϵcube316@etang.com,ллʹ�ã�";		//�ż�����
$other="ע��:�����û�лظ���ַ\n";		//������Ϣ
$mail_send="Off";		//��������յ��ʼ������ΪOff
$nickname=$HTTP_POST_VARS["nickname"];
$qq=$HTTP_POST_VARS["qq"];
$email=$HTTP_POST_VARS["email"];
$ip=getenv("REMOTE_ADDR");
$show_ip=$HTTP_POST_VARS["select"];
$date=date("Y��m��d��H��i��");
$title=$HTTP_POST_VARS["title"];
$content=$HTTP_POST_VARS["content"];

		//�˴���Ҫ�������������ȷ�Եļ�����

require ("common.inc.php");
if($connect){			//������ݿ����ӳɹ����������ݿ���д������
	mysql_select_db($dbname,$connect);
	$sql = "INSERT INTO `guestbook` (`id`,`nickname`,`email`,`qq`,`date`,`ip`,`show_ip`,`title`,`content`)
	VALUES ('','$nickname','$email','$qq','$date','$ip','$show_ip','$title','$content')";
    $result = mysql_query($sql);
	if($result){
	echo "<div align=\"center\"><img src='images/ok.gif'><br><p><font size=\"5\" face=\"����_GB2312\"><b><font color=\"#FF0000\">���Գɹ���</font></b></font></p>  <p><font size=\"2\">��ȴ�3���ӣ������Զ�ת�����԰�ҳ�桭��<br><a href=\"guestbook.php\">���������Ե��������Ϸ���</a></font></p></div><meta http-equiv=\"refresh\" content=\"2; url=guestbook.php\" gb2312\"\">";
		if($mail_send=="On"){		//�����ʼ����ͷ���
		if(@mail($address,$subject,$message,$other)){
		echo "һ���ʼ��Ѿ��������������Ա������˿��Ժܿ��յ���Ϣ��<br>";
		}
		else echo("��Ǹ���ʼ�֪ͨ���˹���û��ʵ�֣�");
		}
		else echo("�����Ա����ʼ�֪ͨ���˹���û�п�����");
	}
	else
	echo("<div align='center'><p><img src='images/sorry.gif'></p><font color='#FF0000' size='4'  face='����_GB2312'><b>�Բ�������ʧ�ܣ������ԣ�</b></font><a href=\"javascript:history.back(1)\">����</a></div>");
}
else echo $connect_error_message;		//��������ʧ�ܵ����
?>