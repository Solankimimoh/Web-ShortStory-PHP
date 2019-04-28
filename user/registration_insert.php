<?php


include("include/Database.php"); 
$db = new Database();

if(isset($_REQUEST['sbmt']))
{

	 $Email = $_REQUEST['userEmail'];
	 $Passward = $_REQUEST['userPwd'];
	 $Mobile = $_REQUEST['userMobile'];
	
	
	if($Email=="" ||
	  $Passward=="" ||
	  $Mobile=="")
	{
		echo "Data Not Found";
	}else
	{
		//		do insert code for database
		
			$insertQuery = "INSERT INTO `users`(`Email`, `Password`, `Mobile`) VALUES ('$Email','$Passward','$Mobile')";
			
			
		
		$rowCount = mysqli_query($db->db_connect(),$insertQuery);
        
			if($rowCount > 0)
			{
				?>
<script>
    alert("Sign up successfully");
    window.location.href = "login.php";

</script>

<?php
			}else{
				echo "Error";
			}
		
	}
	
	
}else
{
	echo "NOT CLICKED";
	header("Location: index.home");
	
}

?>
