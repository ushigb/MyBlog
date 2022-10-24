<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
?> 


<form  method="post" enctype="multipart/form-data">
    <?php
    $q = mysqli_query($db, 'SELECT * FROM posts WHERE id=' . $_GET['post_id']);
    if (!$q) {
        echo 'error';
    }
    ?>
    <div class="container read">
        <div class="row">
            <?php
            while ($row = $q->fetch_assoc()) {
                echo '<div class="col-md-4 col-12">'
                ?>
                <input type="text" class="hidden" name="post_id" value=<?php echo $row['id'] ?>>
                <?php
            }
            ?>
            <div class="img-circle">
                <img class="profile-pic" src=""/>                
                <div>
                    <i class="fa fa-camera upload-button"></i>
                    <input class="file-upload" type="file" name="upload1" accept="image/*"/> 
                    <input type="submit" name="submit1" value="Upload">
                </div>
            </div>
        </div>
    </div>
</div>
</form>


<?php
include 'footer.php';
