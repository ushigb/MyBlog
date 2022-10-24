<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
include 'nav.php';
?>
<form method="post">
    <div class="container">
        <div class="row">
            <div class="col-12 header">
                <h4><p>Your Image has been upload successful !!!</p></h4>
            </div>
            <div class="row imgopt">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-info" name="uploadMore">Upload more</button>
                    <button type="submit" class="btn btn-info" name="postImages">Images</button>                   
                </div>
            </div>            
        </div>
    </div>
    <?php
    $q = mysqli_query($db, 'SELECT * FROM images WHERE post_id=' . $_GET['post_id']);
    if (!$q) {
        echo 'error';
    }
    ?>
    <div class="container read">

        <?php
        while ($row1 = $q->fetch_assoc()) {

            echo '<div class="row">'
            ?>
            <div class="col-md-3 col-12">
                <input type="text" class="hidden"  name="image_id" value=<?php echo $row1['id'] ?>>
                <input type="text" class="hidden" name="post_id" value=<?php echo $row1['post_id'] ?>>
            </div>
        </div>
        <?php
    }
    ?>
</div>


</form>
<?php
include 'footer.php';

