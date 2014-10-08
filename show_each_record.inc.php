<?php
function showrecord($row){
	echo "<br><fieldset style='width:200' align='center'><legend><table width='100' style='border:1 solid black'><tr><td align='center'><font color='#0000FF' size='2'><b>第".$row["id"]."条留言</b></font></td></tr></table></legend><table width='550' style='border:1'  background='images/back.gif'><tr>";//显示第几条留言
	echo "<td align='center' width='150'><p align='left'><font size='2'>昵称：".$row["nickname"]."</font></p></td>";
	echo "<td align='center' width='400'><p align='left'><font size='2'>E-mail：<a href='mailto:".$row["email"]."'>".$row["email"]."</a></font></p></td></tr>";
	echo "<tr><td align='center' width='150'><p align='left'><font size='2'>QQ：".$row["qq"]."</font></p></td>";
	echo "<td align='center' width='400'><p align='left'><font size='2'>来访时间：".$row["date"]."</font></p></td></tr>";
	if($row["show_ip"]==1)
		$myip=$row["ip"];
	else $myip="已设置为保密";
	echo "<tr><td align='center' width='550'><p align='left'><font size='2'>注册IP：".$myip."</font></p></td></tr>";
	echo "<tr><td align='center' width='550' colspan='2'><p align='left'><font size='2'>主题：".$row["title"]."</font></p></td></tr>";
	echo "<tr><td align='center' width='550' colspan='2'><p align='left'><font size='2'>留言内容：<br><font color='#FF0000'>".$row["content"]."</font></font></p></td>";
	echo "</tr></table></fieldset><br>";
	return true;
}
?>