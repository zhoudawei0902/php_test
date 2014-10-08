<?php		
	function mycolor($i){
	$aa=array("#DDDDDD","#F5F5F5");
	if($i%2==0) $col=$aa[0];
	else $col=$aa[1];
	return($col);}//隔行显示背景色的函数
?>