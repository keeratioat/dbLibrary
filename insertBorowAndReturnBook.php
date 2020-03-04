<?php include("connection.php");?>
<?php
     echo $_POST["ISBN"]; 
     echo $_POST["borrowBook"];
     echo $_POST["returnBook"];
     echo $_POST["status"];
     echo $_POST["idMember"];

     $ISBN = $_POST["ISBN"]; 
     $borrowBook = $_POST["borrowBook"];
     $returnBook = $_POST["returnBook"];
     $status = $_POST["status"];
     $idMember = $_POST["idMember"];	 
	 
	 $strSQL = "INSERT INTO borrowandreturnbook (ISBN,borrowBook,returnBook,status,idMember) VALUES ('".$ISBN."',
      '".$borrowBook. "','" .$returnBook."'
      ,'" .$status."','" .$idMember."')";
     
     
	if (mysqli_query($conn, $strSQL)) {
         echo "การสมัครเสร็จสิ้น";
         header( "location: http://localhost/dbPHP/getData.php");
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
         
    }
    mysqli_close($conn);
	
?>