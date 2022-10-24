<?php
$pageTitle = 'Home';
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
include 'nav.php';
?>

<form method="post" action="functions.php">
    <div class="row">
        <div class="col-md-12 ">        
            <div class="panel">
                <div class="panel-heading"><h2>Post your comments</h2></div>
            </div>
        </div>  </div>         
    <div class="row">                                                   
        <div class="col-md-12">
            <input type="hidden" id="user_type" name="post_id"
                   value="<?php echo $_GET['post_id'] ?>">
        </div> 
    </div>    
    <div class="row">        
        <div class="col-md-12">
            <div class= "all_cards  ">
                <input type="hidden" name="username" placeholder="Name" value="<?php echo $_SESSION['user']['username']; ?>">
            </div> 
        </div> 
    </div> 
    <div class="row">        
        <div class="col-md-6"> 
            <div class= "all_cards ">
                <textarea class="form-control " rows="6" name="content">
                </textarea> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8"> 
            <div class= "all_cards ">
                <button type="submit" class="btn btn-primary " name ="add_comment"  >Post Comment</button>
            </div>
        </div>
    </div> 
</form>

<?php
include 'footer.php';
