<?php include("connection.php");?>
<?php
     echo $_POST["idMember"]; 
     echo $_POST["name"];
     echo $_POST["lastName"];
     echo $_POST["Tel"];
     echo $_POST["Address"];
     $idMember = $_POST["idMember"]; 
     $name = $_POST["name"];
     $lastname = $_POST["lastName"];
     $Tel = $_POST["Tel"];
     $address = $_POST["Address"];	 
	 
	$strSQL = "INSERT INTO Member (idMember,name,lastName,Tel,Address) VALUES ('".$idMember."','".$name. "','" .$lastname."'
     ,'" .$Tel."','" .$address."')";
	
	if (mysqli_query($conn, $strSQL)) {
         echo "การสมัครเสร็จสิ้น";
         header( "location: http://localhost/dbPHP/submit_complete.php");
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	
?>