<?php include("connection.php");?>
<html>
<head>
<title>Member</title>
</head>
<body>
<?php
$strSQL = "SELECT * FROM borrowandreturnbook";
$result = mysqli_query($conn, $strSQL);
?>
<center><table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">ISBN </div></th>
	<th width="91"> <div align="center">borrowBook</div></th>
    <th width="98"> <div align="center">returnBook </div></th>
    <th width="98"> <div align="center">status </div></th>
    <th width="98"> <div align="center">idMember </div></th>
  </tr>
  
<?php
if (mysqli_num_rows($result) > 0) {  //output data of each row
    while($row = mysqli_fetch_assoc($result)) 
		{
?>
    <tr>
        <td><div align="center"><?php echo $row["ISBN"];?></div></td>
        <td><?php echo $row["borrowBook"]?></td>
        <td><?php echo $row["returnBook"];?></td>
        <td><?php echo $row["status"];?></td>
        <td><?php echo $row["idMember"];?></td>
    </tr>
<?php
         }
   } 
   else 
   {
    echo "0 results";
   }
?>
</table></center>
<?php
mysqli_close($conn);
?>
 <br>
  <center>  <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="left">
            <input type="submit" name="Submit2" id="regis" class="btn btn-info btn-sm" value="Back" onclick='location.replace("insertBorowReturn_ui.php")'>
    </tr></center>
        </br>
</body>
</html>