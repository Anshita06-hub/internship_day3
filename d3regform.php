<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Registration Form</h2>

    <form action="d3reggetpost.php" method="POST">

        First name:<input type="text" name="firstname"> <br><br>

        Last name:<input type="text" name="lastname"><br><br>
        
        Gender: <input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female 
<input type="radio" name="gender" value="Other"> Other <br><br>

        Email-id: <input type="text" name="Email-id"> <br><br>
        
        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" value="Submit">

    </form>
</body>
</html>

