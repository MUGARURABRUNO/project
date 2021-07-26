<?php include 'projectcontroller.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #FF6600;
	font-weight: bold;
	font-size: 36px;
}
.style2 {
	color: #000000;
	font-weight: bold;
}
.style4 {color: #000000}
-->
</style>
</head>

<body class="patientback">
<p align="center" class="style1">PATIENT DETAILS</p>
<form id="form1" name="form1" method="post" action="">
  <table width="408" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="174" height="33"><span class="style2">Patient Identity Number</span> </td>
      <td width="234"><label for="patientId"></label>
      <input type="text" name="patientId" /></td>
    </tr>
    <tr>
      <td height="47"><strong><span class="style4">National Identity Number</span></strong> </td>
      <td><label for="Nin"></label>
      <input type="text" name="Nin" /></td>
    </tr>
    <tr>
      <td height="42"><span class="style4"><strong>Hospital identity Number </strong></span></td>
      <td><label for="hospitalId"></label>
      <input type="text" name="hospitalId" /></td>
    </tr>
    <tr>
      <td height="33"><span class="style4"><strong>passport</strong></span></td>
      <td><label for="image_link"></label>
      <input type="text" name="image_link" /></td>
    </tr>
    <tr>
      <td height="37"><span class="style4"><strong>First Name </strong></span></td>
      <td><label for="fname"></label>
      <input type="text" name="fname" /></td>
    </tr>
    <tr>
      <td height="43"><span class="style4"><strong>Last Name </strong></span></td>
      <td><label for="lname"></label>
      <input type="text" name="lname" /></td>
    </tr>
    <tr>
      <td height="68"><span class="style4"><strong>Gender</strong></span></td>
      <td><label for="sex"></label>
        <table width="200">
          <tr>
            <td><label>
              <input type="radio" name="sex" value="radio" />
              Male</label></td>
          </tr>
          <tr>
            <td><label>
              <input type="radio" name="sex" value="radio" />
              Female</label></td>
          </tr>
        </table>      </td>
    </tr>
    <tr>
      <td height="39"><span class="style4"><strong>Date Of Birth </strong></span></td>
      <td><label for="date_of_birth"></label>
      <input type="date" name="date_of_birth" /></td>
    </tr>
    <tr>
      <td height="38"><span class="style4"><strong>Patient Occupation </strong></span></td>
      <td><label for="patientOccupation"></label>
      <input type="text" name="patientOccupation" /></td>
    </tr>
    <tr>
      <td height="42"><span class="style4"><strong>Email</strong></span></td>
      <td><label for="email"></label>
      <input type="text" name="email" /></td>
    </tr>
    <tr>
      <td height="42"><span class="style4"><strong>Telephone Number </strong></span></td>
      <td><label for="telNumber"></label>
      <input type="text" name="telNumber" /></td>
    </tr>
    <tr>
      <td><span class="style4"><strong>Nationality</strong></span></td>
      <td><label for="nationality"></label>
      <input type="text" name="nationality"/></td>
    </tr>
    <tr>
      <td height="31"><span class="style4"><strong>District</strong></span></td>
      <td><label for="district"></label>
      <input type="text" name="district" /></td>
    </tr>
    <tr>
      <td height="33"><span class="style4"><strong>Sub County </strong></span></td>
      <td><label for="subcounty"></label>
        <input type="text" name="subcounty" />
    </tr>
    <tr>
      <td height="50"><span class="style4"><strong>Parish</strong></span></td>
      <td><label for="parish"></label>
      <input type="text" name="parish"/></td>
    </tr>
    <tr>
      <td height="44"><span class="style4"><strong>Village</strong></span></td>
      <td><label for="village"></label>
      <input type="text" name="village" /></td>
    </tr>
    <tr>
      <td height="48" colspan="2"><label for="Submit"></label>
      <input type="submit" name="Submit1" value="Submit" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>

</html>
