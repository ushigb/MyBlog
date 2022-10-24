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
            
        <div class="col-md-6">
            
                
                    <input type="hidden" name="username" value="<?php echo $_GET['username'] ?>" >

           
            
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h4>
                <label>Text:</label>
            </h4>
            <textarea class="form-control" name="text" rows="4"></textarea>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="input-group-access">
                <button type="submit" class="btn btn-secondary" name="sendTo">Send</button>                    
            </div>
        <div class="col-md-3"></div>
        
    </div>
</div>
</form>


<?php
include 'footer.php';

