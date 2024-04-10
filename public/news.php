<?php require_once '../template/headerNoLogin.php';?>

<body>
    <div class="container">
        <div class="header clearfix">
            <?php require_once '../template/navBar.php';?>

            <h3 class="text-muted">PHP Login exercise - News page</h3>
        </div>

        <div class="mainarea">
            <h2>This page is viewable whether you are logged in or not!</h2>

            <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>
        </div>

        <div class="row marketing">
            <div>
                <h4>About page</h4>
                <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>

            </div>
        </div>
    </div>

<?php require_once '../template/footer.php';?>
