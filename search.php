<html>
<head>
	<title> Search – Student database management system </title>
	
	<?php 
		$login=0;
		include_once 'Login_valid.php';
	if(!$login)
	{?>
	<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="http://localhost/Project/Login_signup.php";
            }			
         setTimeout('Redirect()', 3000);
         //-->
    </script>
	<?php }
	?>
	<link rel="Stylesheet" type="text/css" href="css.css">
</head>

<body>
 <div id=grad1 >      
	<font color = white size= 5>	
		<font size='10'><u><center> Student database management system </center></u></h1></font>
		<?php if(!$login) echo "<center><font style=background-color:red;> Please login to continue... </font></center>";?>
        
		<hr>
	
<?php 
	if($login)
	{
		?>
		<center>
		<div class="dropdown">
		  <button class="dropbtn">Insert</button>
		  <div class="dropdown-content">
			<a href="http://localhost/Project/ins_per_info.php">Personal info</a>
			<a href="http://localhost/Project/ins_aca_info.php">Acadamic info</a>
		  </div>
		</div>
		
		
		<div class="dropdown">
		  <button class="dropbtn">Search</button>
		  <div class="dropdown-content">
			<a href="http://localhost/Project/search.php">Search</a>
		  </div>
		</div>
		
		<div class="dropdown">
		  <button class="dropbtn">Update</button>
		  <div class="dropdown-content">
			<a href="http://localhost/Project/search.php">Students records</a>
		  </div>
		</div>
		
		<div class="dropdown">
		  <button class="dropbtn">Delete</button>
		  <div class="dropdown-content">
			<a href="http://localhost/Project/delete.php">Single record</a>
			<a href="http://localhost/Project/deleteall.php">All records</a>
		  </div>
		</div>
		
		<div class="dropdown">
		  <button class="dropbtn">Display</button>
		  <div class="dropdown-content">
			<a href="http://localhost/Project/search.php">Search</a>
			<a href="http://localhost/Project/displayall.php">All </a>
		  </div>
		</div>
		
		<div class="dropdown">
		  <button class="dropbtn"><?php echo $udata['User_name'];?></button>
		  <div class="dropdown-content">
			<a href="http://localhost/Project/staff_update.php">Update</a>
			<a href="http://localhost/Project/logout.php">Logout</a>
		  </div>
		</div>
		
		<hr>
		Welcome to student database management system
		</font>
		</center>
		
		<div style='float:right'>
			<form method ="POST" class='userinfo' name='form1' >
				<center><u> User's corner </u><center>
					<p> Use the search if you want to search by using an keyword or a part of roll number or else use the multiple querey options given to search a group of people or individual satisfying a criteria.  </p>
				<font size=6>THANK YOU</font>					
			</form>
		</div>
		
		<form name=summa  class='after' method='POST'>
		    <center><u><font size=7 color=green>SEARCH STUDENTS DETAILS </font></u><br>
		<br>
		<br>
		<input type=text value="" name='keyword' class=search placeholder=Search... >  <input type=submit value=Search name=keysea  formaction='search1.php'>
		
		<hr>
		<table>
			<tr>
				<th> Column </th>
				<th> Condition </th>
				<th> Value </th>
			</tr>
			
			<tr>
				<th><select name="col1" class=search >
						<option  value="First_name">First name </option>
						<option  value="Last_name">Last name</option>
						<option  value="Age">Age</option>
						<option value=Father>Father Name </option>
						<option value=Mother>Mother Name </option>
						<option value=6>Semester </option>
						<option value=7>Semester </option>
						<option value=8>Semester </option>
					</select>
		</table>
		</center>
		</form>	
		<?php 
		}
?>
</div>
</body>
</html>