<?php
include 'functions.php';
include 'header.php';
include 'head.php';
?>

<div class="header">
    <h2>Login</h2>
</div>
<div class="container-fluid">
    <div class="row">
        <form method="post"  action="login.php" class="access">
            <?php echo display_error(); ?>
            <div class="input-group-access">
                <input type="hidden" name="user_id" >
            </div>
            <div class="input-group-access">
                <h4><label>Username:</label></h4>
                <input type="text" name="username" >
            </div>
            <div class="input-group-access">
                <h4><label>Password:</label></h4>
                <input type="password" name="password">
            </div>
            <div class="input-group-access">
                <button type="submit" class="btn" name="login_btn">Login</button>
            </div>
            <div class="some">        
                <h4><p>
                        Not yet a member? <a href="register.php" 
                                             class="btn btn-info" name="register">Sign up</a>
                        <a href="index.php"  class="btn btn-info" name="back">Back</a>
                    </p></h4>

            </div>
        </form>
    </div>
</div>

<?php
include 'footer.php';
