<?php
function showrecord($row){
	echo "<br><fieldset style='width:200' align='center'><legend><table width='100' style='border:1 solid black'><tr><td align='center'><font color='#0000FF' size='2'><b>��".$row["id"]."������</b></font></td></tr></table></legend><table width='550' style='border:1'  background='images/back.gif'><tr>";//��ʾ�ڼ�������
	echo "<td align='center' width='150'><p align='left'><font size='2'>�ǳƣ�".$row["nickname"]."</font></p></td>";
	echo "<td align='center' width='400'><p align='left'><font size='2'>E-mail��<a href='mailto:".$row["email"]."'>".$row["email"]."</a></font></p></td></tr>";
	echo "<tr><td align='center' width='150'><p align='left'><font size='2'>QQ��".$row["qq"]."</font></p></td>";
	echo "<td align='center' width='400'><p align='left'><font size='2'>����ʱ�䣺".$row["date"]."</font></p></td></tr>";
	if($row["show_ip"]==1)
		$myip=$row["ip"];
	else $myip="������Ϊ����";
	echo "<tr><td align='center' width='550'><p align='left'><font size='2'>ע��IP��".$myip."</font></p></td></tr>";
	echo "<tr><td align='center' width='550' colspan='2'><p align='left'><font size='2'>���⣺".$row["title"]."</font></p></td></tr>";
	echo "<tr><td align='center' width='550' colspan='2'><p align='left'><font size='2'>�������ݣ�<br><font color='#FF0000'>".$row["content"]."</font></font></p></td>";
	echo "</tr></table></fieldset><br>";
	return true;
}
?>