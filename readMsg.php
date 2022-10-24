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
        <?php
            $q = mysqli_query($db, 'SELECT * FROM `messages` WHERE id=' . $_GET['id']);
            if (!$q) {
                echo 'error';
            }
            ?>
        <?php
            while ($row = $q->fetch_assoc()) {

                echo ''
                ?>   
        
        <div class="col-md-3 readMsg">
            <label><h3>From:</h3><h4><?php echo $row["msgFrom"] ?></h4></label>
        </div>
        <div class="col-md-6 readMsg">
            

                 
                                   
                    <h4><p><?php echo $row["text"] ?></p></h4>                              
                
                
            </div>
        </div>  
        </div>
        <div class="col-md-3"></div>
    <?php
            }?>




