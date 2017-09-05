<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="frm">
        <form action="process.php" method="POST">
            <tr>
                <td width="139" height="20" align="right" valign="middle" background="./images/horline_200r.jpg"><b style="color: #ffffff;">Username</b>&nbsp;:</td>
                <td width="281" height="20" align="left" valign="middle" background="./images/horline_350.jpg" bgcolor="#EEEEEE">&nbsp;&nbsp;
                      <input maxlength="32" size="20" border="0" name="user" id="user" type="text" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td width="139" height="20" align="right" valign="middle" background="./images/horline_200r.jpg"><b style="color: #ffffff;">Password</b>&nbsp; :</td>
                <td width="281" height="20" align="left" valign="middle" background="./images/horline_350.jpg" bgcolor="#EEEEEE">&nbsp;&nbsp;
                      <input maxlength="32" size="20" border="0" name="pass" id="pass" type="password" autocomplete="off">
                </td>
            </tr>
            <p>
                <input type="submit" id="btn" name="login">
            </p>
        </form>
    </div>
</body>
</html>