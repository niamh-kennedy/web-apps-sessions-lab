<?php require_once '../templates/headerNoLogin.php';?>

<body>
    <div class="container">
        <div class="header clearfix">
            <?php require_once '../templates/navBar.php';?>

            <h3 class="text-muted">PHP Login exercise - News page</h3>
        </div>

        <div class="mainarea">
            <h2>This page is viewable whether you are logged in or not!</h2>

            <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
            </form>
        </div>

        <div class="row marketing">
            <div>
                <h4>News page</h4>
                <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>

            </div>
        </div>
    </div>

<?php require_once '../templates/footer.php';?>
