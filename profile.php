<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
?>

<form method="post" enctype="multipart/form-data">
    <div class="container profile">
        <div class="row"> 
            <div class="col-md-3 col-12">
                <?php
                $q = mysqli_query($db, 'SELECT * FROM users WHERE id=' . $_SESSION["user"]["id"]);
                if (!$q) {
                    echo 'error';
                }
                while ($row = $q->fetch_assoc()) {
                    echo '<div class="img-circle">'
                    ?>
                    <img class="profile-pic" src=<?php echo $row['profilePic'] ?>>                
                    <div class="p-image">
                        <i class="fa fa-camera upload-button"></i>
                        <input class="file-upload" type="file" name="upload" accept="image/*"/>               
                    </div>
                </div>
            </div>       
            <div class="col-md-5 col-12">
                <div class="input-group-access"><h4>
                        <label>Username:
                            <input type="username" name="updateUsername" value=<?php echo $row['username'] ?>>
                        </label>
                    </h4>
                </div>
                <div class="input-group-access">
                    <h4>
                        <label>Email:
                            <input type="email" name="updateEmail" value=<?php echo $row['email'] ?>>
                        </label>
                    </h4>
                </div>
                <div class="input-group-access">
                    <h4>
                        <label>Change password:
                            <input type="password" name="updatePassword" value="">
                        </label>
                    </h4>
                </div>
                <div>
                    <a href="functions.php?delacc=<?php echo $row["id"] ?>" class="btn btn-danger a-btn-slide-text ">Delete Account</a>
                </div>
                <?php
            }
            ?>
            <div class="input-group-access">
                <button type="submit" class="btn" name="profileEdit">Edit</button>                    
            </div>
            <a href="index.php"  class="btn btn-info" name="back">Back</a>
        </div>
    </div>
</div>

</form>

<?php
include 'footer.php';


