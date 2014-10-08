<?php
header("Location:guestbook.php");//为了防止在用文件目录访问时出现"没有权限"或者"列出全部文件"的问题，请在Apache的配置文件中增加index.php为默认起始文件，这样本程序就可以自动转到留言薄程序了！或者也可以将此文件改为自己的首页文件
exit();
?>