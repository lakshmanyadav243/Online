<?php

SESSION_start();
include("connect.php");

$username =$_POST['username'];
$password = $_POST['password'];
$role =$_POST['role'];

$check=mysqli_query($connect, "SELECT * FROM register1 WHERE username='$username' AND password='$password' AND role='$role' ");

if(mysqli_num_rows($check)>0){
   $userdata=mysqli_fetch_array($check);
   $groups=mysqli_query($connect,"SELECT*FROM register1 where role=2");
   $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
   
   $_SESSION['userdata'] = $userdata;
   $_SESSION['groupsdata']= $groupsdata;

   echo '
   <script>
     window.location="http://localhost/my%20files/dashboard.php";
   </script>
   ';
}
else{
   echo'
   <script>
   alert("invalid credentional or user not found!");
   window.location="http://localhost/my%20files/online%20voting%20system.php";
   </script>
   ';
}

?>