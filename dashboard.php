<?php
SESSION_start();
  if(!isset($_SESSION['userdata'])){
  	header("http://localhost/my%20files/online%20voting%20system.php");
  }

$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];

if($_SESSION['userdata']['status']==0){
	$status='<b style="color:red">Not voted</br>';
}
else{
	$status='<b style="color:green">Voted</br>';
}
?>


<html>
<head>
  <title>online voting system-Dashboard</title>
	<link rel="stylesheet" href="http://localhost/my%20files/stylesheet.css">
</head>

	<body>
		<style>
			#backbtn{
				padding:5px;
	            border-radius: 5px;
	            background-color:e76f51;
	            color:white;
	            border-radius: 5px;
	            float: left;
	        }

			#logoutbtn{
				padding: 5px;
	            border-radius: 5px;
	            background-color:e76f51;
	            color:white;
	            border-radius: 5px;
	            float: right;
	        }
	        #profile{
	        background-color:white;
	        width:30%;
	        padding:10px;
	        float: left;
	        }

	      #Group{
	      	background-color: white;
	      	width: 60%;
	      	padding: 30px;
	      	float: right;
	      }
	      #votebtn{
	            padding:5px;
	            border-radius: 5px;
	            background-color:orange;
	            color:white;
	            border-radius: 5px;	
	      }
	      #voted{
	      	    padding:5px;
	            border-radius: 5px;
	            background-color:green;
	            color:white;
	            border-radius: 5px;	
	      }

			</style>
			<center>

			<div id ="mainsection">
				<div id ="headersection">
					<button id="backbtn"><a href="http://localhost/my%20files/online%20voting%20system.php">back</a></button>
					<button id="logoutbtn"><a href="http://localhost/my%20files/register.html"> logout</a></button>
                    <h1>Online Voting System</h1>
                </div>
             </center>
		<hr>
		<div id="profile">
	 <img style="float:center;"src=" C:\Users\laxman\Desktop\online.jpg"height="100"width="100"><br><br>
		
		<b> username:</b><?php echo$userdata['username']?> <br><br>
		<b> Gmail_id:</b><?php echo$userdata['Gmail_id']?> <br><br>
		<b> Mobile_no:</b><?php echo$userdata['mobile_no']?> <br><br>
		<b> status:</b><?php echo $status ?> <br><br>
	</div>

		<div id="Group">
			<?php
			  if($_SESSION['groupsdata']){
			  	for($i=0; $i<count($groupsdata);$i++){
			  		?>
			  		<div>
			  			<img style="float:right;"src=" C:\Users\laxman\Desktop\online.jpg"height="100"width="100"><br><br> 
			  			<b>Group name:</b><?php echo $groupsdata[$i]['username']?> <br><br>
			  			<b>Votes: </b><?php echo $groupsdata[$i]['votes']?> <br><br>
                        
                        
			  			<form action="http://localhost/my%20files/vote.php" method="POST">
			  			 
			              
                          <input type="hidden"name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
                          <input type="hidden"name="gid" value="<?php echo $groupsdata[$i]['votes']?>">
			              
			              
			              <?php
			              if($_SESSION['userdata']['status']==0){
			            ?>
			  			  <input type="submit"name="votebtn" value="Vote"id="votebtn">
			  			  <?php
			  			}
			  			else{
			  				?>
			  				<button disabled type="button" name="votebtn" value="vote" id="voted">voted</button>
			  				<?php
			  			}
			  			?>

			  			</form>
			  		</div>
			  		<?php
			  	}

			  }
            else{

            }
				?>
				
				</div>
				<hr>

								
		
		</div>
	</body>
 </html>