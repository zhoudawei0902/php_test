<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ÿ�����</title>

<script language=javascript>
<!--
 function checksub(){
 	guestform.nickname.value=vbtrim(guestform.nickname.value);
 	guestform.title.value=vbtrim(guestform.title.value);
	guestform.content.value=vbtrim(guestform.content.value);
 	if (guestform.nickname.value==" "){
 		alert("�ǳ��Ǳ�����ģ�");
 		guestform.nickname.value="";
 		guestform.nickname.focus();
 		return false;
 	}
 	if (guestform.title.value==" "){
 		alert("������ô��û�������أ�");
 		guestform.title.focus();
 		return false;
 	}
 	if (guestform.content.value==" "){
 		alert("������û������Ҳ�����Բ��ɣ�");
 		guestform.content.focus();
 		return false;
 	}
 }
-->
</script>
<script language=vbscript>
<!--
 function vbtrim(x)
 	if trim(x)="" then
 		vbtrim=" "
 	else
 		vbtrim=trim(x)
 	end if
 end function
-->
</script>
</head>

<body>
<table width="760" border="0" align="center"><tr><td>
      <form method="post" name="guestform" action="guestcheck.php" onsubmit="return checksub();">
        <div align="center"> 
    <center>
      <table border="0" width="90%" bgcolor="#000000" cellspacing="1">
        <tr> 
          <td width="100%" bgcolor="#EEEEEE" align="center"><font size="2"><br>
            ����������<font size="3">�� �� �� �� �� �� �� �� �� ��</font>����������<br>
            <br>
            <span align=center><font color=#808000>���뾡����������Ϣ��д������лл֧�֣���</font><font color="#800000"><b>*</b></font><font color=#808000>Ϊ���</font></span> 
            </font>
            <div align="center"> 
              <center>
                      <table border="0" width="80%" cellspacing="1" bgcolor="#000000">
                        <tr> 
                          <td width="25%" bgcolor="#999999" align="right"><font color="#FFFFFF" size="2">�ǳƣ�</font></td>
                          <td width="75%" bgcolor="#EEEEEE"> <font size="2"> 
                            <input name="nickname" size="13" style="width: 310; height: 18" onmouseover="focus();select();">
                            <font color="#800000"><b>*</b></font></font></td>
                        </tr>
                        <tr> 
                          <td width="25%" bgcolor="#999999" align="right"><font color="#FFFFFF" size="2">OICQ��</font></td>
                          <td width="75%" bgcolor="#EEEEEE"> <font size="2"> 
                            <input name="qq" size="13" style="width: 310; height: 18" onmouseover="focus();select();">
                            </font></td>
                        </tr>
                        <tr> 
                          <td width="25%" bgcolor="#999999" align="right"><font color="#FFFFFF" size="2">E-Mail��</font></td>
                          <td width="75%" bgcolor="#EEEEEE"> <font size="2"> 
                            <input name="email" size="13" style="width: 310; height: 18" onmouseover="focus();select();">
                            </font></td>
                        </tr>
                        <tr> 
                          <td width="25%" bgcolor="#999999" align="right"><font color="#FFFFFF" size="2">��ʾIP��</font></td>
                          <td width="75%" bgcolor="#EEEEEE"> <font size="2"> 
                            <select name='select'>
                              <option value='1' selected>��</option>
                              <option value='0'>��</option>
                            </select>
                            ������ ������ ������ע:��ָ�����԰����Ƿ���ʾ</font></td>
                        </tr>
                        <tr> 
                          <td width="25%" bgcolor="#999999" align="right"><font color="#FFFFFF" size="2">���⣺</font></td>
                          <td width="75%" bgcolor="#EEEEEE"> <font size="2"> 
                            <input name="title" size="13" style="width: 310; height: 18" onmouseover="focus();select();">
                            <font color="#800000"><b>*</b></font></font></td>
                        </tr>
                        <tr> 
                          <td width="25%" bgcolor="#999999" align="right"><font color="#FFFFFF" size="2">�������ݣ�<br>
                            </font></td>
                          <td width="75%" bgcolor="#EEEEEE" valign="middle"> <font size="2"> 
                            <textarea name="content" cols="13" style="width: 310;" rows="6" onmouseover="focus();select();"></textarea>
                            <b><font color="#800000">*<br>
                            </font></b><font color="#800000"> <font color="#666666">����ʱ�侫�����ޣ�Ŀǰ������ʹ��<font color="#990000"><b>html</b></font>��<b><font color="#990000">ubb</font></b>���룬���½�!</font></font></font></td>
                        </tr>
                      </table>
              </center>
            </div>
			<script language="javascript">
			function confirm_back(){
			if (confirm("����ľ�������������?")){
			window.location="guestbook.php";
			return true;
			}
			return false;
			}
			</script>
                  <p><font size="2"><br>
                    <input type="submit" value="�� ��" name="submit">
                    �� 
                    <input type="reset" value="�� ��" name="reset">
                    �� 
                    <input type="button" name="back" value="�Ȼ�ȥ����" onclick="confirm_back();">
                    </font></p>
            <p>&nbsp;</p>
          </td>
        </tr>
      </table>
    </center>
  </div>
  </form>
  </td></tr></table>
<?php require("copyright.php");?>
  </body>
  </html>