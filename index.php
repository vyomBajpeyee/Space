<!DOCTYPE html>
<html>
	<head>
    	<?php
	$a=mysql_connect("localhost","root","");
	$b=mysql_select_db("vyom");
		?>
        
		<title>SPACE Suite</title>
        <style>
			@import url("../css/logincss.css");
		</style>
	</head>
	<body>
    <div>
		<h1>S.P.A.C.E. Suite</h1>
		<p>This site is for registered users only. The member access is restricted to the authorization of administration and is subject to the discretion of authority.</p>
		<p>Your request will be sent to the site administrators and they will get back to you with your details via mail.</p>
		<p>To gain access the user:</p>
		<ul>
			<li>Must be a member of the SPACE Suite project</li>
			<li>Must be a part of the review and testing team</li>
			<li>Must be stakeholder in the project</li>
		</ul>
		<form action="http://www.example.com/form.php" method="get">
			<div id="reqlogin"><fieldset>
				<legend>Request to Join</legend>
				<p><label class="title" for="name">Your name:</label>
					 <input type="text" name="name" id="name"><br />
					 <label class="title" for="email">Your email:</label>
					 <input type="text" name="email" id="email"></p>
				<p><label for="group" class="title">Your group:</label>
					 <select name="group" id="group">
						 <option value="eProc">E-Proctor</option>
						 <option value="image">Image</option>
						 <option value="video">Video</option>
						 <option value="sound">Sound</option>
						 <option value="mng">Maths & Games</option>
						 <option value="pnc">Physics & Chemistry</option>
						 <option value="uil">UI & LTI</option>
					 </select></p>
			</fieldset>
 	    <div class="submit"><input type="submit" value="Request" /></div></div>
		</form>
		<form action="../homepage.php" method="get">
			<div id="reqlogin"><fieldset float="right">
				<legend>Login</legend>
				<p><label class="title" for="userId" >UserId &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</label>
					 <input type="text" name="userId" id="userId" size="20"><br />
					 <label class="title" for="pword">Password &nbsp&nbsp: </label>
					 <input type="password" name="pword" id="pword" size="20"></p>
			</fieldset>
 	    <div class="submit"><input type="submit" value="Log In" /></div></div>
		</form>
        </div>
	</body>
</html>
