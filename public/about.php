<?php require_once '../templates/header.php';?>
  
<body>
    <div class="container">
        <div class="header clearfix">
            <?php require_once '../templates/navBar.php';?>

            <h3 class="text-muted">PHP Login exercise - About page</h3>
        </div>

    <div class="mainarea">
        <h1>Status: You are logged in <?php echo $_SESSION['Username']; ?></h1>

        <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    </div>

    <div class="row marketing">
    <div>
    <h4>About page</h4>
    <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>

    </div>

<?php require_once '../templates/footer.php';?>
