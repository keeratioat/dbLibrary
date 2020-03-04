<html>
<body>
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<form action="insertMember.php" method="post">
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <br>
    <h3 align="center"> Sign Up </h3>
    <br>
      <form action="" method="POST" name="register"  id="register">
        <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="18%" align="right"> ID &nbsp;</td>
            <td width="31%"><input name="idMember" type="text" id="idMember" class="form-control" required> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>

          </tr>
          <tr>
          <td align="right"> Name &nbsp;</td>
            <td colspan="2">
            <input name="name" type="text" id="name"  class="form-control"  required></td>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td align="right"> Last Name &nbsp;</td>
            <td colspan="2">
            <input name="lastName" type="text" id="lastName"  class="form-control"  required></td>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td align="right">Tel &nbsp; </td>
            <td><input name="Tel" type="text" id="Tel" class="form-control"  required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>

          <tr>
            <td align="right"> E-mail &nbsp; </td>
            <td><input name="email" type="email" id="email" class="form-control"  required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td align="right"> Address &nbsp; </td>
            <td><input name="Address" type="Address" id="Address" class="form-control"  required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
            <td align="center">&nbsp;</td>
            <td colspan="3" align="center">
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="left">
            <input type="submit" name="regis" id="regis" class="btn btn-info btn-sm" value="Sign Up" >

            <td align="center">&nbsp;</td>
            <td colspan="3" align="right">
            <input type="submit" name="Submit2" id="regis" class="btn btn-info btn-sm" value="Back" onclick='location.replace("insertBorowReturn_ui.php")'>
            
            </td>
          </tr>
        </table>
      </form>
      </div>
    </div>
  </div>

</form>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>