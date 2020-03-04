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

<form action="insertBorowAndReturnBook.php" method="post">
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <br>
   
    <br>
   <center> <img src="Book.JPG"  width="200" ,height="400"></center>
   <br>
      <form action="" method="POST" name="register"  id="register">
        <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="18%" align="right"> ISBN &nbsp;</td>
            <td width="31%"><input name="ISBN" type="text" id="ISBN" class="form-control" required> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            
          </tr>
          
          <tr>
          <td align="right"> Borrow Book &nbsp;</td>
            <td colspan="2">
            <input name="borrowBook" type="text" id="borrowBook"  class="form-control"  required></td>
            <td>&nbsp;</td>
          </tr>
            
          <tr>
            <td align="right"> Return Book &nbsp;</td>
            <td colspan="2">
            <input name="returnBook" type="text" id="returnBook"  class="form-control"  required></td>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td align="right">Status &nbsp; </td>
            <td><input name="status" type="text" id="status" class="form-control"  required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>

          <tr>
            <td align="right"> Member &nbsp; </td>
            <td><input name="idMember" type="text" id="idMember" class="form-control"  required></td>
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
            <input type="submit" name="regis" id="regis" class="btn btn-info btn-sm" value="Save" >

            <td align="center">&nbsp;</td>
            <td colspan="3" align="right">
            <input type="submit" name="Submit2" id="regis" class="btn btn-info btn-sm" value="Sign Up" onclick='location.replace("insertMember_ui.php")'>

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