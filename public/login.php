<?php require_once('../template/header.php'); ?>

<?php require_once ('config.php'); ?>

<link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>
</head>


<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    </form>
	
	<?php 
	/* check if the login form has been submitted */
	
	if(isset($_POST['Submit']))
	{
		/* check if the form's username and password matches */
		if(($_POST['Username'] == $Username) && ($_POST['Password'] == $Password))
		{
			echo 'Success'; /* Success: set session variables and redirect to protected page */
			$_SESSION['Username'] = $Username; // store Username to the session
		} else		
			echo 'Incorrect Username or Password';
	}
	?>
</div>
</body>
</html>
