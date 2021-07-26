<?php include 'projectcontroller.php' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body class="hospitalback">
<p align="center" class="style1">HOSPITAL FORM</p>
<form id="form1" name="form1" method="post" action="">
  <table width="331" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="187" height="38"><strong>Hospital Identity Number</strong> </td>
      <td width="144"><label for="hospitalId"></label>
      <input type="text" name="hospitalId" /></td>
    </tr>
    <tr>
      <td height="33"><strong>Hospital Registration Number</strong> </td>
      <td><label for="regNO"></label>
      <input type="text" name="regNO" /></td>
    </tr>
    <tr>
      <td height="32"><strong>Patient identity Number</strong> </td>
      <td><label for="patientId"></label>
      <input type="text" name="patientId" /></td>
    </tr>
    <tr>
      <td><strong>Hospital Name</strong></td>
      <td><label for="hospitalname"></label>
      <input type="text" name="hospitalname" /></td>
    </tr>
    <tr>
      <td height="42"><strong>District</strong></td>
      <td><label for="district"></label>
      <input type="text" name="district"/></td>
    </tr>
    <tr>
      <td><strong>Sub County </strong></td>
      <td><label for="subcounty"></label>
      <input type="text" name="subcounty"/></td>
    </tr>
    <tr>
      <td height="42"><strong>Parish</strong></td>
      <td><label for="Parish"></label>
      <input type="text" name="parish" /></td>
    </tr>
    <tr>
      <td height="65"><strong>Village</strong></td>
      <td><label for="village"></label>
      <input type="text" name="village"/></td>
    </tr>
    <tr>
      <td height="91" colspan="2"><label for="Submit"></label>
      <input type="submit" name="Submit2" value="Submit"</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>