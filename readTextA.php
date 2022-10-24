<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
include 'nav.php';
include 'checkStatus.php';
?>

<div class="container">
    <div class="row img_row"> 
        <?php
        $q = mysqli_query($db, 'SELECT i.id, i.name FROM post_images AS pi JOIN images AS i ON pi.images_id = i.id WHERE pi.post_id =' . $_GET['post_id']);
        if (!$q) {
            echo 'error';
        } else {
            $row = $q->fetch_assoc();
            if (!empty($row)) {
                ?>
                <div class="col-sm-5 col-12">
                    <img class="img"  src="<?php echo $row['name'] ?>">
                </div> 
                <?php
            } else {
                ?>
                <div class="col-sm-5 col-12">
                    <img class="img"  src="postImg/defaultImg.png">
                </div>
                <?php
            }
            ?>

            <div class="col-sm-7 col-12">
                <?php
            }
            $q = mysqli_query($db, 'SELECT * FROM posts WHERE id=' . $_GET['post_id']);
            if (!$q) {
                echo 'error';
            }
            ?>

            <?php
            while ($row = $q->fetch_assoc()) {

                echo ''
                ?>        
                <div class="col-md-12  readText">
                    <h2><?php echo $row["title"] ?></h2>
                    <h5><p><?php echo $row["post_text"] ?></p></h5>                              
                </div>
            </div>
        </div>  
        <?php
        if ($_SESSION['user']['user_type'] != 'admin') {
            ?>
            <div class="container">    
                <div class="row">
                    <a href="postImages.php?post_id=<?php echo $row['id'] ?>" class="btn btn-info" name="postImages">Post images</a>
                    <a href="addComent.php?post_id=<?php echo $row['id'] ?>"  class="btn btn-primary" name="comment">Add comment</a>
                    <a href="index.php"  class="btn btn-info" name="back">Back</a>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="container">    
                <div class="row">                    
                    <a href="postImages.php?post_id=<?php echo $row['id'] ?>" class="btn btn-info" name="postImages">Post images</a>
                    <a href="addComent.php?post_id=<?php echo $row['id'] ?>"  class="btn btn-primary" name="comment">Add comment</a>
                    <a href="index.php"  class="btn btn-info" name="back">Back</a>
                    <a href=functions.php?delpost=<?php echo $row["id"] ?> class="btn btn-danger a-btn-slide-text ">Delete</a>
                </div></div>
            <form method="post">
                <div>
                    <?php
                    if ($row['status'] != 'Active') {
                        ?>
                        <label><h4>Status:</h4>
                            <h5><select  name="postStatus" value=<?php echo $row['status'] ?>>
                                    <option value="No active">No active</option>
                                    <option  value="Active">Active</option>
                                </select></h5>
                        </label>                
                        <input type="text" class="hidden" name="post_id" value=<?php echo $row['id'] ?>>
                        <button type="submit" class="btn btn-primary" name="postStatusEdit">Post Edit</button>
                    </div>
                </form>
                <?php
            }
        }
    }

    $q = mysqli_query($db, "SELECT * FROM `comments` WHERE post_id =" . $_GET['post_id'] . " order by ID desc");

    if (!empty($q)) {
        ?>
        <button type="button" id="show_comments" class=" btn btn-primary a-btn-slide-text comments  " 
                name="show_comments"><strong>Show comments</strong></button>
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 comment">
                    <div id="load_comments" class="hidden">
                        <?php
                        while ($row = $q->fetch_assoc()) {
                            ?> 
                            <div class="comment_fild">                            
                                <div class="comment_fild">
                                    <div class="row">
                                        <div class="col-sm-10">                                    
                                            <div class=" comment_row"><label><h4> Posted by:  </h4></label><h5 class="name"><?php echo $row['username'] ?></h5></div>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href=functions.php?delcoment=<?php echo $row["id"] ?> class="btn btn-danger a-btn-slide-text ">Delete</a>
                                        </div>
                                    </div>
                                    <div class="comment_row comments "><h6><?php echo $row['content'] ?></h6></div>
                                    <div class="date"><label><h5>  Date Posted:</h5></label><h6><?php echo $row['datePosted'] ?></h6></div> 
                                </div>
                            </div>                           
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    ?>
</div>
</div>
<?php
include 'footer.php';
