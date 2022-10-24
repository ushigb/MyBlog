
<?php
            $q = mysqli_query($db, 'SELECT i.id, i.name FROM post_images AS pi JOIN images AS i ON pi.images_id =i.id WHERE pi.post_id =' . $row['id']);
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
            
                }
        