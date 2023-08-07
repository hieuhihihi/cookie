<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>doc_cookie</title>
<style type="text/css">
body{
	background-color: #D5EAFF;
    background-image: url();
}
</style>
</head>
<body>
<p align = "center"><font color = "#0000CC"></font>
<?php
    if (isset($_COOKIE['khach_hang']))
    echo "xin chào khách hàng <b><i>" .$_COOKIE["khach_hang"] . "</b></i><br />";
    else
    echo "Xin chào quý khách! <br />";
    echo "<a href = 'cookie.php'>Quay về trang thông tin khách hàng!</a><br>"
?>
<table width="398" height = "442" border = "2" align = "center" cellpadding = "0"  cellspacing = "0">
    <tr>
        <td height = "177" colspan = "2" align = "center"><img src ="https://th.bing.com/th/id/OIP.g4MxhBb-Fvw5TBS5cxjAOAHaD4?pid=ImgDet&rs=1" width ="389" height = "164" /></td>
    </tr>
<tr>
<td width="194" height = "140" align = "center"><p><img src ="https://th.bing.com/th/id/OIP.g4MxhBb-Fvw5TBS5cxjAOAHaD4?pid=ImgDet&rs=1" width ="185" height = "128" /></p>
    <p>HOA...VND</p></td>
    <td width = "196" align = "center"><p><img src ="https://th.bing.com/th/id/OIP.g4MxhBb-Fvw5TBS5cxjAOAHaD4?pid=ImgDet&rs=1" width ="188" height = "129" /></p>
    <p>HOA...VND</p></td>
</tr>
<tr>
<td align = "center"><p><img src ="https://th.bing.com/th/id/OIP.g4MxhBb-Fvw5TBS5cxjAOAHaD4?pid=ImgDet&rs=1" width ="188" height = "106" /></p>
    <p>HOA...VND</p></td>
    <td align = "center"><p><img src ="https://th.bing.com/th/id/OIP.g4MxhBb-Fvw5TBS5cxjAOAHaD4?pid=ImgDet&rs=1" width ="191" height = "105" /></p>
    <p>HOA...VND</p></td>
</tr>
</table>
</body>