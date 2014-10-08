<?php
session_start();
$bye=session_is_registered("admin_enter");	//检查变量是否已注册
if($bye){
	session_unregister("admin_enter");
	session_destroy();
	echo "<meta http-equiv=\"refresh\" content=\"2; url=guestbook.php\" gb2312\"\">";
	echo "您已经成功退出登陆！现在自动转到留言薄，请稍候……";
}
else{
	echo "<meta http-equiv=\"refresh\" content=\"1; url=admin.inc.php\" gb2312\"\">";
	echo "您根本就没有登陆，请通过正常渠道进入！";
}
?>