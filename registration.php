<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<body background="11.jpg" style="background-repeat: no-repeat; background-size: cover;">
	<form id="register">
		<fieldset>
			<legend><b>REGISTRATION FOR NEW USER</b> </legend>
			<label for="name"> Your full name</label>
			<input type="text" name="name" id="name" maxlength="50"/><br><br>

			<label for="email">Email address</label>
			<input type="text" name="email" id="email" maxlength="70"/><br><br>

			<label for="Mobile number">Mobile number</label>
			<input type="auto" name="Mobileno" id="Mobile number" maxlength="10"/><br><br>

			<label for="username"> username </label>
			<input type="text" name="username" id="username" maxlength="50"/><br><br>

			<label for="password"> password</label>
			<input type="text" name="password" id="password" maxlength="50"/><br><br>

			<input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male <br><br>

			<input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset" value="Reset">


		</fieldset>
	</form>

</body>
</html>