<?php
//ע�⣬�����򽨱�guestbook�����벻Ҫ�޸Ĵ����֣������Ժ�ĳ��򶼻�����м��мǣ�
include ("common.inc.php");
$address="516730405@qq.com";
$subject="��ϲ������ʹ���������Ա�����";
$message="���ã��������յ����Ǵ����Ա��Ϸ���������Ϣ,˵������ʹ���������Ա�,лл��";
$other="ע��:�����û�лظ���ַ\n";
if($connect){		//��ʼ����
	mysql_select_db($dbname,$connect);
	$create_table_guestbook="CREATE TABLE `guestbook` (
	`id` TINYINT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`nickname` VARCHAR(50) NOT NULL,
	`email` VARCHAR(20) NOT NULL, 
	`qq` double NOT NULL default '0',
	`date` VARCHAR(25) NOT NULL default 'û�м�¼',
	`ip` VARCHAR(15) NOT NULL, 
	`show_ip` TINYINT(1) NOT NULL default '0',
	`title` VARCHAR(50) NOT NULL, 
	`content` text NOT NULL, 
	UNIQUE (`id`)
	)";
	if(mysql_query($create_table_guestbook)){
		@mail($address,$subject,$message,$other);
		echo "<div align='center'><p><img src='images/ok.gif'></p><font color='#336600' size='4'  face='����_GB2312'><b>ף����������ɹ���<br></b></font></div><a href=\"guestbook.php\">ת�����Ա�</a>";
		exit();
	}
	else echo "����ʧ�ܣ�<br>����ԭ��<br>1.����common.inc.php�е����ò���ȷ<br>2.�Ѿ����������ݱ�guestbook<br> 3.�������ܵ�ԭ��.";
}
else echo $connect_error_message;//��������ʧ�ܵ����
?>