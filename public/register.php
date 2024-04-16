<?php
require_once('../src/functions.php');
$functions = new functions();
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/signin.css">
        <title>Register</title>
    </head>

    <?php
    if(isset($_POST['Submit'])) {
        try {
            require_once "../src/db_connect.php";

            $new_user = array (
                    "username" => $functions->clean($_POST['Username']),
                    "password" => $functions->clean($_POST['Password'])
            );


            $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
                implode(", ", array_keys($new_user)),
                ":" . implode(", :", array_keys($new_user)));

            $statement = $connection->prepare($sql);
            $statement->execute($new_user);
        } catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }


    /* check if the login form has been submitted */
    if (isset($_POST['Submit']) && $statement ) {
        header("location:login.php");
        exit;
    }
    ?>


    <body>
        <div class="container">
            <form action="" method="post" name="Login_Form" class="form-signin">
                <h2 class="form-register-heading">Welcome! To register, please enter your details:</h2>

                <label for="inputUsername" >Username: </label>
                <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>

                <label for="inputPassword">Password: </label>
                <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

                <div class="checkbox">
                    <button name="Submit" value="Submit" class="button" type="submit">Register</button>
                </div>
                <h4>Already have an account? <a href="login.php">Login here</a></h4>
            </form>
        </div>
    </body>
</html>

<?php require_once '../templates/footer.php';?>