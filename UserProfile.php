<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'msg.php';
include 'head.php';
?>

<form method="post" enctype="multipart/form-data">
    <div class="container profile">
        <div class="row"> 
            <div class="col-md-3 col-12">
                <?php
                $q = mysqli_query($db, 'SELECT * FROM users WHERE id=' . $_GET['user_id']);
                if (!$q) {
                    echo 'error';
                }
                while ($row = $q->fetch_assoc()) {
                    echo '<div class="img-circle">'
                    ?>                
                    <img class="profile-pic" src=<?php echo $row['profilePic'] ?>>                
                </div>
            </div>       
            <div class="col-md-5 col-12">
                <div class="input-group-access">
                    <h4><label>Username:
                            <input type="username" name="updateUsername" value=<?php echo $row['username'] ?>>
                        </label>
                    </h4>
                </div>
                <div class="input-group-access">
                    <h4>
                        <label>Email:<input type="email" name="updateEmail" value=<?php echo $row['email'] ?>>
                        </label>
                    </h4>
                </div>
                <div class="input-group-access">
                    <h4>
                        <label>User Type:
                            <select  name="updateUser_type" value=<?php echo $row['user_type'] ?>>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </label>
                    </h4>
                </div>
                <div class="input-group-access">
                    <h4>
                        <label>Status:
                            <select  name="updateStatus" value=<?php echo $row['status'] ?>>
                                <option value="No active">No active</option>
                                <option  value="Active">Active</option>
                            </select>
                        </label>
                    </h4>
                </div>
                <?php
            }
            ?>
            <div class="input-group-access">
                <button type="submit" class="btn" name="edit">Edit</button>  
                <a href="index.php"  class="btn btn-info" name="back">Back</a>
            </div>
            <div>
                <?php
                $sql = "SELECT * FROM posts WHERE id=" . $_GET['user_id'];
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<h5><a class="btn btn-primary logout"'
                        . ' href="posts.php?user_id='
                        . $row["id"] . '">Posts</a></h5>';
                    }
                }
                ?>                    
            </div>
        </div>
    </div>
</div>
</form>

<?php
include 'footer.php';






