<title>�������</title>
<table width="550" border="0" align="center"><tr><td>
<div align='center'><p><img src='images/guestbook.gif'></p></div></td></tr>
<tr><td><font size='2'>
<?php
$counterFile =  "counter.txt";
function displayCounter($counterFile) {
  $fp     = fopen($counterFile,"rw");
  $num    = fgets($fp,5);
  $num    += 1;
  echo  "���ǵ�<font color=#FF00FF><b> ".$num." </b></font>λ�ι���";
  exec( "rm -rf $counterFile");
  exec( "echo $num > $counterFile");
}
if (!file_exists($counterFile)) {
  exec( "echo 0 > $counterFile");
}
displayCounter($counterFile);
?>
������<a href='index.php'>������ҳ</a>����<a href='guestadd.php'>�������</a>����<a href='manage.php'>����Աר��</a></font><br></td></tr>
<tr><td><?php
include ("common.inc.php");//���ù����ļ��������ݿ�
if($connect){
	$name_result = mysql_list_tables ($dbname);
	if(!$name_result){
		echo $db_not_found;
		exit;
	}		//�����û��������ݿ��������
	$i = 0;
	$judge=0;
	while ($i < mysql_num_rows ($name_result)) {
    $tb_names[$i] = mysql_tablename ($name_result, $i);
	if($tb_names[$i]=="guestbook"){
		$judge=1;
		break;}
		$i++;
	}
	if($judge==0){
		echo "<div align='center'><p><img src='images/sorry.gif'></p><font color='#336600' size='3'  face='����_GB2312'><b>�Բ���Ŀǰ��û�н������ݱ�guestbook������ϵ����Ա��</b></font><a href='mailto:cube316@etang.com?subject=û�н������ݱ�guestbook'><font size='2' color='#ff0000'>������ϵ</font></a></div><br>";
		exit();
	}				//���ϼ���guestbook�Ƿ����
	mysql_select_db($dbname,$connect);
	$result=mysql_query("select * from guestbook",$connect);
	$num=mysql_num_rows($result);
	echo "<font size='2'>�������� <font color=#FF00FF><b>".$num." </b></font>��</font><br>";//��ʾ������Ŀ�������£������ҳ����ת����
	if($num==0)								//������ݿ������޼�¼
	echo("<div align='center'><p><img src='images/sorry.gif'></p><font color='#336600' size='3'  face='����_GB2312'><b>�Բ���Ŀǰ��û���κ����ԣ���Ҫ����ͷ��</b></font><a href='guestadd.php'><font size='4'>ok</font></a></div>");
		//�����¼Ϊ�㣬����ʾ�κ�����
	else{
		include ("show_each_record.inc.php");
		for($i=1;$i<=$num;$i++){
		$row=mysql_fetch_array($result);		
		showrecord($row);		
	}
	}
}
else echo $connect_error_message;//��������ʧ�ܵ����
?>
</td></tr></table>
<?php require("copyright.php");?>
</body>