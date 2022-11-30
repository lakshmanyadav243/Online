
<?php

include("connect.php");

$username=$_POST['username'];
$Gmail_id=$_POST['Gmail_id'];
$mobile_no=$_POST['mobile_no'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$role=$_POST['role'];

if($password==$confirm_password){
$insert=mysqli_query($connect, "INSERT INTO register1 (username, Gmail_id, mobile_no, password, confirm_password, role,status,votes) VALUES ('$username','$Gmail_id','$mobile_no','$password','$confirm_password','$role',0,0)");

        if($insert){
        	echo '
        <script>
	        alert("registration succesfull");
	        window.location="http://localhost/my%20files/online%20voting%20system.php";

	</script>
	';

	}
	else{
	echo'
	<script>
	   alert("some error occur");
	   window.location="http://localhost/my%20files/register.html";
	</script>
	';
} 
         

    }

    else{
 	echo '
	
    <script>
	   alert("password and confirm password doesnot match");
	   window.location ="http://localhost/my%20files/register.html"
        
	 </script>
	 ';

	}
	


?>
