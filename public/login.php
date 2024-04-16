<?php
require_once('../src/functions.php');
$functions = new functions();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>
</head>

<?php

/* check if the login form has been submitted */
if(isset($_POST['Submit'])) {
    try {
        require_once "../src/db_connect.php";

        $username = $functions->clean($_POST['Username']);
        $password = $functions->clean($_POST['Password']);

        $sql = "SELECT *
        FROM users
        WHERE username = :username";

        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll();

    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

/* check if the form's username and password against database */
if (isset($_POST['Submit'])) {
    if ($result && $statement->rowCount() > 0) {
        echo 'Success'; /* Success: set session variables and redirect to protected page */
        $_SESSION['Username'] = $username; // store Username to the session
        $_SESSION['Active'] = true;
        header("location:index.php");
        exit;
    } else {
        echo 'Incorrect Username or Password';
    }
}
?>


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
                <h4>Don't have an account? <a href="register.php">Register here</a></h4>
            </form>

        </div>
    </body>
</html>
<?php require_once '../templates/footer.php';?>
