<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
include 'nav.php';


$q = mysqli_query($db, 'SELECT i.name FROM post_images AS pi JOIN images AS i ON pi.images_id =i.id WHERE pi.post_id =' . $_GET['post_id']);
if (!$q) {
    echo 'error';
} else {
    while ($row = $q->fetch_assoc()) {
        echo '<div class="row img_row ">'
        ?>
        <div class="col-md-8 col-12 imgopt">
            <img class="img"  src="<?php echo $row['name'] ?>">
        </div>
        </div>
        <?php
    }
}
?>
</div>
</div>
<a href="uploadImg.php?post_id=<?php echo $_GET['post_id'] ?>" class="btn btn-info" name="uploadImg">Upload Images</a>
<a href="readTextA.php?post_id=<?php echo $_GET['post_id'] ?>"  class="btn btn-info" name="back">Back</a>

<?php
include 'footer.php';


