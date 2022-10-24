<?php
include 'header.php';
?>
<nav class="navbar navbar-light bg-secondary">
    <div class="row">
        <div class="col-md-12 ">
            <a class="navbar-brand" href="index.php">
                <img class="logo1" src="profileImg/My_Logo1.jpg" alt=""></a>
        </div>
    </div>
    <ul class="navbar-nav">
        <div class="row">
            <span class="col-md-6 ">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php" ><h3>Home</h3></a>                          
                </li>
            </span>
            <span class="col-md-6 ">
                <li class="nav-item">
                    <a class="nav-link" href="#"><h3>About</h3></a>
                </li>
            </span>                               
        </div>
    </ul>

    <?php
    if (!$_SESSION) {
        ?>
        <div class="row">
            <div class="col-md-4 acc">
                <span class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log in</a>
                    </li>
                </span>
                <span class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Sign in</a>
                    </li>
                </span>
            </div>
            <div class="col-md-6 "> 
                <img class="profile_img" src="/postImg/default_img.png" alt="">
            </div>
        </div>
    </nav>
    </body>
    <?php
} else {
    ?>
    <div class="row">
        <div class="col-md-6 nav-link ">
            <h5><strong class="nav-link"><?php echo $_SESSION['user']['username']; ?></strong></h5>
            <small>
                <h6><i class="nav-link"  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i></h6> 
                <br>
            </small>
            <h6><a class="logout" href="index.php?logout='1'" role="button">logout</a></h6>
        </div> 
        <div class="col-md-6 ">               
            <?php if (isset($_SESSION['user'])) : ?>
                <div >                
                    <img class="profile_img" src= <?php echo $_SESSION['user']['profilePic']; ?> >                
                </div> 
            </div>            
        <?php endif ?>        
    </div>
    </nav>
    </body>
    <?php
}

        
