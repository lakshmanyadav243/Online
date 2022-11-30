<?php
SESSION_start();
include('connect.php');

$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['votes'];
$uid=$_SESSION['userdata']['votes'];


$update_votes = mysqli_query($connect,"UPDATE register1 SET votes='$total_votes' WHERE votes='$gid' ");
$update_register1_status=mysqli_query($connect,"UPDATE register1 SET status=1 WHERE votes='$uid' ");

if ($update_votes and $update_register1_status){
	$Groups =mysqli_query($connect,"SELECT*FROM register1 WHERE role=2");
	$groupsdata =mysqli_fetch_all($Groups,MYSQLI_ASSOC);
   
    $_SESSION['userdata']['status'] =1;
	$_SESSION['groupsdata'] =$groupsdata;


	echo'
	<script>
	alert("Voting succesfully");
	window.location="http://localhost/my%20files/dashboard.php";
	</script>
	';
} 

else{
	echo'
	<script>
	alert("some error occured");
	window.location="#";
	</script>
	';
}
?>