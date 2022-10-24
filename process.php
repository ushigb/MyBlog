<?php
include 'functions.php';

$q = "INSERT INTO `comments` (`username`, `content`, `datePosted`) 
      VALUES ('" . $_POST['username'] . "','" . $_POST['content'] . "',Now())";

$result = mysqli_query($q);

if ($result == 1) {

    $q = "SELECT * FROM `comments` order by ID desc";

    $result = mysqli_query($q);

    while ($row = mysqli_fetch_array($result)) {
        echo '<div class="panel panel-primary">'
        ?> 
        <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Posted by : <?php echo $row['username'] ?>
        </div>
        <div class="panel-body"><?php echo $row['content'] ?></div>
        <div class="panel-footer">Date Posted:<?php echo $row['datePosted'] ?></div></div> 
        <?php
    }
} 
 
 


