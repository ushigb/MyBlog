<?php
if ($_SESSION['user']['user_type'] != 'admin') {
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">  
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" class="list-group-item list-group-item-actionv">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php" class="list-group-item list-group-item-actionv">Profile</a>
                </li>     
                <li class="nav-item">
                    <a class="nav-link " href="newPost.php" class="list-group-item list-group-item-action">New post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="myPosts.php?user_id= <?php echo $_SESSION['user']['id'] ?>" class="list-group-item list-group-item-action">My posts</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link " href="messages.php" class="list-group-item list-group-item-action">Messages</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
} else {
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" class="list-group-item list-group-item-actionv">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php" class="list-group-item list-group-item-actionv">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Users.php" class="list-group-item list-group-item-action">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="newPost.php" class="list-group-item list-group-item-action">New post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="myPosts.php?user_id= <?php echo $_SESSION['user']['id'] ?>" class="list-group-item list-group-item-action">My posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="checkPost.php" class="list-group-item list-group-item-action">Check new posts</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link " href="messages.php" class="list-group-item list-group-item-action">Messages</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
}




