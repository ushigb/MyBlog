<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'multi_login');

$username = "";
$email = "";
$errors = array();

if (isset($_POST['register_btn'])) {
    register();
}

// REGISTER USER
function register() {

    global $db, $errors, $username, $email;

    $username = e($_POST['username']);
    $email = e($_POST['email']);
    $password_1 = e($_POST['password_1']);
    $password_2 = e($_POST['password_2']);
    $username_escape = mysqli_real_escape_string($db, $username);
    $q = mysqli_query($db, 'SELECT * FROM users WHERE 
            username="' . $username_escape . '"');

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if (mb_strlen($username) < 3) {
        array_push($errors, "The name is too short");
    }
    if (mysqli_num_rows($q) > 0) {
        array_push($errors, "There is such a user");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    if (mb_strlen($password_1) <= 5) {
        array_push($errors, "Password is too short");
    }

    if (count($errors) == 0) {
        $password = md5($password_1);

        $query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
        mysqli_query($db, $query);

        $logged_in_user_id = mysqli_insert_id($db);

        $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}


function getUserById($id) {
    global $db;
    $query = "SELECT * FROM users WHERE id=" . $id;
    $result = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}

function e($val) {
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}


if (isset($_POST['login_btn'])) {
    login();
}

// LOGIN USER
function login() {
    global $db, $username, $errors;


    $id = e($_POST['user_id']);
    $username = e($_POST['username']);
    $password = e($_POST['password']);


    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }


    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'  ";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {

            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['user_type'] == 'admin') {

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "You are now logged in";
                header('location:index.php');
            } else {
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "You are now logged in";

                header('location: index.php');
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

if (isset($_POST['edit'])) {
    $id = $_GET['user_id'];
    $usernameupdate = $_POST['updateUsername'];
    $emailupdate = $_POST['updateEmail'];
    $usertypeupdate = $_POST['updateUser_type'];
    $userStatusupdate = $_POST['updateStatus'];

    if (!empty($usernameupdate) && !empty($emailupdate) && !empty($usertypeupdate) && !empty($userStatusupdate)) {

        $q = mysqli_query($db, "UPDATE users"
                . " SET username= '$usernameupdate', email= '$emailupdate',"
                . " user_type= '$usertypeupdate', status= '$userStatusupdate'"
                . " WHERE id='$id' ");

        if (!$q) {
            die("failed");
        }
        header("location:Users.php");
    } else {
        $error = "Error! No Changes Made";
    }
}


if (isset($_POST['profileEdit'])) {
    $id = $_SESSION['user']['id'];
    $usernameupdate = $_POST['updateUsername'];
    $emailupdate = $_POST['updateEmail'];

    if (!empty($usernameupdate) && !empty($emailupdate) && !empty($passwordupdate)) {

        $q = mysqli_query($db, "UPDATE users"
                . " SET username= '$usernameupdate', email= '$emailupdate',"
                . " WHERE id='$id' ");

        if (!$q) {
            die("failed");
        }
        header("location:profile.php");
    } else {
        $error = "Error! No Changes Made";
    }
}

function isAdmin() {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
        return true;
    } else {
        return false;
    }
}

function isLoggedIn() {
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_FILES['upload'])) {

        $file_name = $_FILES['upload']['name'];
        $file_type = $_FILES['upload']['type'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $file_size = $_FILES['upload']['size'];
        $target_dir = "profileImg/";

        if (move_uploaded_file($file_tmp_name, $target_dir . $file_name)) {
            $q = mysqli_query($db, 'UPDATE users SET profilePic="' .
                    $target_dir . $file_name . '" WHERE id="' . $_SESSION['user']['id'] . '"');
            if (mysqli_affected_rows($db) == 1) {
                echo "<p><b> successful </b></p>";
            } else {
                echo "<p> error </p>" . mysqli_error($db);
            }
        } else {
            echo "File can not be uploaded";
        }
    }
}

if (isset($_POST['add_btn'])) {
    add();
}

function add() {
    global $db, $error;

    $title = $_POST['title'];
    $text = $_POST['text'];
    $category = $_POST['Category'];
    $user_id = $_SESSION['user']['id'];

    if (!empty($title) && !empty($text)) {
        $q = mysqli_query($db, "INSERT INTO posts (title, post_text, category, user_id)"
                . " VALUES ('$title', '$text', '$category', '$user_id')");
        if (!$q) {
            die("failed");
        }
        header("location: myPosts.php");
    } else {
        $error = "Error! ";
    }
}

if (isset($_GET['delpost'])) {
    $id = $_GET['delpost'];
    mysqli_query($db, "DELETE FROM posts WHERE id=$id");
    header('location: index.php');
}

if (isset($_GET['delcoment'])) {
    $id = $_GET['delcoment'];
    mysqli_query($db, "DELETE FROM comments WHERE id=$id");
    header('location: index.php');
}

if (isset($_GET['delacc'])) {
    $id = $_GET['delacc'];
    mysqli_query($db, "DELETE FROM users WHERE id=$id");
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}

if (isset($_POST['add_comment'])) {
    add_comment();
}

function add_comment() {
    global $db, $error;

    $username = $_SESSION['user']['username'];
    $content = $_POST['content'];
    $post_id = $_POST['post_id'];

    if (!empty($username) && !empty($content)) {
        $q = mysqli_query($db, "INSERT INTO comments (`username`, `content`, `datePosted`, `post_id`) 
                                VALUES ('$username', '$content', Now(), '$post_id')");
        if (!$q) {
            die("failed");
        }
        header('location: readTextA.php?post_id=' . $_POST['post_id']);
    } else {
        
    }
}

if (isset($_POST['postStatusEdit'])) {
    $postStatus = $_POST['postStatus'];

    if ($_POST['postStatus'] != 'Active') {
        echo '<h4><p>Need some actions</p></h4>';
    } else {
        $q = mysqli_query($db, "UPDATE posts"
                . " SET status= '$postStatus' WHERE id=" . $_POST['post_id']);
        if (!$q) {
            die("failed");
        }
        header('location:checkPost.php');
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_FILES['upload1'])) {

        $file_name = $_FILES['upload1']['name'];
        $file_type = $_FILES['upload1']['type'];
        $file_tmp_name = $_FILES['upload1']['tmp_name'];
        $file_size = $_FILES['upload1']['size'];
        $target_dir = "postImg/";
        $post_id = $_POST['post_id'];

        if (move_uploaded_file($file_tmp_name, $target_dir . $file_name)) {
            $q = mysqli_query($db, "INSERT INTO `images`( `name`, `post_id` )"
                    . " VALUES ('" . $target_dir . $file_name . "', " . $post_id . ")");
            if (mysqli_affected_rows($db) == 1) {
                header("location:agree.php?post_id=" . $post_id);

                echo "<p><b> successful </b></p>";
            } else {
                echo "<p> error </p>" . mysqli_error($db);
                die();
            }
        } else {
            echo "File can not be uploaded";
        }
    }
}

if (isset($_POST['uploadMore'])) {
    $image_id = $_POST['image_id'];
    $post_id = $_POST['post_id'];

    $q = mysqli_query($db, "INSERT INTO `post_images`( `post_id`, `images_id` )"
            . " VALUES (" . $post_id . ", " . $image_id . ")");
    if (!$q) {
        die("failed");
    }
    header('location:uploadImg.php?post_id=' . $_GET['post_id']);
}

if (isset($_POST['postImages'])) {
    $image_id = $_POST['image_id'];
    $post_id = $_POST['post_id'];

    $q = mysqli_query($db, "INSERT INTO `post_images`( `post_id`, `images_id` )"
            . " VALUES (" . $post_id . ", " . $image_id . ")");
    if (!$q) {
        die("failed");
    }
    header('location:postImages.php?post_id=' . $_GET['post_id']);
}

if (isset($_POST['checkName'])) {

    $username = $_POST['username'];

    $q = "SELECT * FROM `users`"
            . " WHERE `username` ='" . $username . "'";
    $res = mysqli_query($db, $q);
    if (!$q) {
        die('error');
    }
    if (mysqli_num_rows($res) == 1) {
        header('location:newMessage.php?username=' . $_POST['username']);
    } else {
        echo 'error';
        die();
    }
}

if (isset($_POST['sendTo'])) {
    $msgFrom = $_SESSION['user']['username'];
    $username = $_POST['username'];
    $text = $_POST['text'];

    $q = "INSERT INTO `messages`(`msgFrom`, `text`, `msgTo`)"
            . " VALUE ('$msgFrom', '$text', '$username')";
    $res = mysqli_query($db, $q);

    if (!$q) {
        echo 'error';
        die;
    }
    header('location: confirm.php');
}





