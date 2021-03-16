<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>

	<form action="RegistrationFormAction.php" method="POST">

		

		<h2>Basic Information</h2>
		<hr>
		<fieldset>
		<!-- Input Text Field -->
		<label for="name">Name</label>
		<input type="text" name="name" id="name">

		<br>
        <label for=" gender: ">Gender:</label> 
		<input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label>

		<input type="radio" name="gender" id="female" value="female">

		<label for="female">Female</label>


		 
        <br>
        <label for="dob">Date Of Birth</label>
        <input type="Date" name="dob" id="dob">
        
		<br>
		    <label for="religion">Riligion :</label>
        	<select name="religion" id="religion" > 
        	<option selected disable>--select --</option>
        	<option value="muslim">Muslim</option>
        	<option value="hindu">hindu</option>
        	<option value="muslim">christian</option>
            </select>

         <br>

		<label for="fname">Father Name</label>
		<input type="text" name="fname" id="fname" >

        <br>

		<label for="mname">Mother Name</label>
		<input type="text" name="mname" id="mname">

		<br>

		<label for="pass">Password</label>
		<input type="password" name="pass" id="pass"> 
        <br>
        </fieldset>
		
		<h2>Contact Information</h2>
		<hr>
		<fieldset>

	    <label for="address">Present Address</label>
		<input type="text" name="address" id="address">
		<br>
		<label for="praddress" >Permanent Address</label>
		<input type="text" name="praddress" id="praddress">
		<br>
		<label for="phone">Phone</label>
		<input type="text" name="phone" id="phone">
		<br>
		<label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="website">Web Site</label>
        <input type="url" name="website" id="website">
        </fieldset>


        <h2>Academic Information</h2>
        <hr>
        <fieldset>
        <label for="ssc">SSC year</label>
        <input type="number" name="ssc" id="ssc" >
        <br>
        <label for="school">SSC Institution</label>
        <input type="text" name="school" id="school">
        <br>
        <label for="hsc">HSC year</label>
        <input type="number" name="hsc" id="hsc">
        <br>
        <label for="collage">HSC Institution</label>
        <input type="text" name="collage" id="collage">
        </fieldset>
        
        <input type="submit" value="Submit">

	</form>

</body>
</html>