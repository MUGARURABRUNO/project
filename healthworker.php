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
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body class="healthwworkerback">
<p align="center" class="style1">HEALTH WORKER FORM</p>
<form id="form1" name="form1" method="post" action="">
  <table width="441" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="181"><strong>Worker Identity Number </strong></td>
      <td width="260"><label for="workerId"></label>
      <input type="text" name="workerId"  /></td>
    </tr>
    <tr>
      <td><strong>Hospital Identity </strong></td>
      <td><label for="hospitalId"></label>
      <input type="text" name="hospitalId" /></td>
    </tr>
    <tr>
      <td><strong>First Name </strong></td>
      <td><label for="firstName"></label>
      <input type="text" name="firstName" /></td>
    </tr>
    <tr>
      <td><strong>Last Name </strong></td>
      <td><label for="lastName"></label>s
      <input type="text" name="lastName" /></td>
    </tr>
    <tr>
      <td><strong>National Identity Number(NIN) </strong></td>
      <td><label for="Nin"></label>
      <input type="text" name="Nin"/></td>
    </tr>
    <tr>
      <td><strong>Gender</strong></td>
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
      <td><strong>Date Of Birth </strong></td>
      <td><label for="dateOfBirth"></label>
      <input type="date" name="dateOfBirth"/></td>
    </tr>
    <tr>
      <td><strong>Position Occupied</strong> </td>
      <td><label for="positionOccupied"></label>
      <input type="text" name="positionOccupied" /></td>
    </tr>
    <tr>
      <td> <strong>Nationality </strong></td>
      <td><label for="workerNationality"></label>
      <input type="text" name="workerNationality" /></td>
    </tr>
    <tr>
      <td><strong>District </strong></td>
      <td><label for="District"></label>
      <input type="text" name="District" /></td>
    </tr>
    <tr>
      <td><strong>Sub County </strong></td>
      <td><label for="subCounty"></label>
      <input type="text" name="subCounty"/></td>
    </tr>
    <tr>
      <td><strong>Parish</strong></td>
      <td><label for="parish"></label>
      <input type="text" name="parish" /></td>
    </tr>
    <tr>
      <td><strong>Village</strong></td>
      <td><label for="village"></label>
      <input type="text" name="village" /></td>
    </tr>
    <tr>
      <td colspan="2"><label for="Submit"></label>
      <input type="submit" name="Submit3" value="Submit"  /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
