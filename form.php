<?php 
require 'core/init.php'; 

if(isset($_POST))
{
	 $name=$_POST['name']; 
	 $email=$_POST['email']; 
	 $num=$_POST['num'];
	 $sub=$_POST['sub'];
	 $msg=$_POST['msg'];


$query = query("insert into form(name,num,email,sub,msg) values('$name','$num','$email','$sub','$msg') ");

confirm($query);

echo '<h1>Your Feedback Have Been Submitted</h1>';

}



?>
<!DOCTYPE HTML>
<html>
<head><META http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>﻿
<div>
	
	<div>
		
		<div>
			<div>
				<div>
					<a href="http://index.html" target="_blank"><img src="http://images/logo1.png" alt=""></a>
				</div>
				<div>
					<span><img src="http://images/menu.png" alt=""></span>
					<ul>
						<li><a href="http://index.html" target="_blank">Home<i>Lorem ipsum dolor sit amet</i></a></li>
						<li><a href="http://about.html" target="_blank">About<i>Lorem ipsum dolor sit amet</i></a></li>
						<li><a href="http://products.html" target="_blank">Products<i>Lorem ipsum dolor sit amet</i></a></li>
						<li><a href="http://404.html" target="_blank">Events<i>Lorem ipsum dolor sit amet</i></a></li>
						<li><a href="http://mail.html" target="_blank">Mail Us<i>Lorem ipsum dolor sit amet</i></a></li>
						<div> </div>
					</ul>
					
							 
						
				</div>
				<div> </div>
			</div>
		</div>
		
	</div>
	
	
	<div>
		
		<div>
			<div>
				
		
			


		
				<div>
				
					<form  action="" method="post"> 
							FEEDBACK FORM<br>
							Name:<br> 
 							<input type="text" name="name" value="" required>
  							<br><br>
  							Phone No:<br>
 							<input type="number" name="num"  align="right" required>
  							<br><br>
							email:<br>
 							<input type="email" name="email">
  							<br><br>
							Subject:<br>
							<input type="text" name="sub" required><br><br>
							Message:<br>
						        <textarea name="msg" required></textarea><br><br>
						         <input type="submit" value="Submit">
					</form>
				</div>
				
			<div>
				<div>
					<h3>Contact Us</h3>
					<h4>Headquarters</h4>
					<p>123 T. Globel Place.
						<span>Sector 09-123</span>
						Thane,west
					</p>
					<h4>Get In Touch</h4>
					<p>Telephone: +1 234 567 9871<br>
						E-mail: <a href="mailto:info@example.com" target="_blank">theteam1234@gmail.com</a>
					</p>
				</div>
			</div>
			









				<div> </div>
			</div>
		</div>
		
	</div>
	
	
	
</div>
</body></html>