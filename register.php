<?php
include 'functions.php';
include 'header.php';
include 'head.php';
?>

<div class="header">
    <h2>Register</h2>
</div>
<form method="post" action="register.php" class="access">
    <?php echo display_error(); ?>
    <div class="input-group-access">
        <h4><label>Username:</label></h4>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group-access">
        <h4><label>Email:</label></h4>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group-access">
        <h4><label>Password:</label></h4>
        <input type="password" name="password_1">
    </div>
    <div class="input-group-access">
        <h4><label>Confirm password:</label></h4>
        <input type="password" name="password_2">
    </div>
    <div class="input-group-access">
        <button type="submit" class="btn" name="register_btn">Register</button>
    </div>
    <div class="some">
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
        <a href="index.php">Back</a>
    </div>
</form>

<?php
include 'footer.php';

