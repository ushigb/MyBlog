

<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
include 'nav.php';
include 'checkStatus.php';
?>
<form method="post"  action="newMessage.php" >
<div class="container">
    <div class="row">        
            <?php echo display_error(); ?>
            <div class="col-md-3">
                <input type="hidden" name="user_id" >
            </div>
        <div class="col-md-6 checkName">
            <h4>
                <label>Sent to:</label>
            </h4>
            <input type="text" name="username" value="username" >
        </div>
        <div class="col-md-3"></div>
        <div class="input-group-access">
                <button type="submit" class="btn btn-secondary" name="checkName">Continue</button>                    
            </div>
    </div></div>
        </form>