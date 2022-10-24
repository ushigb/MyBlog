<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
include 'nav.php';
include 'checkStatus.php';
?>

<div class="container">
    <div class="row">
        
        <div class="col-md-12 greet">            
            <h1>Welcome to you'r messages box <span class="mess-name"> <?php echo $_SESSION['user']['username']; ?></span>!</h1>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 inbox ">
            <h3><a href="inbox.php" class="inboxLink" >Inbox</a></h3>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4 inbox">
            <h3><a href="checkNameMessage.php" class="inboxLink" >New Messages</a></h3>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>


<?php
include 'footer.php';