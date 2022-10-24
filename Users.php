<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'msg.php';
include 'head.php';
?>

<div class="row all_cards">
    <div class=" col-12">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col-md-2 col-12">id</th>
                    <th scope="col-md-3 col-12">username</th>
                    <th scope="col-md-3 col-12">email</th>
                    <th scope="col-md-3 col-12">user_type</th>
                    <th scope="col-md-2 col-12">status</th>                   
                </tr>
            </thead> 
            <tbody>
                <tr>            
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = $db->query($sql);
                    echo "<table";
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>'
                            ?><td><?php echo $row["id"] ?></td>
                            <td><a class="users_link"
                                   href="UserProfile.php?user_id=<?php echo $row["id"] ?>"><?php echo $row["username"] ?></a>
                            </td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["user_type"] ?> </td>
                            <td><?php echo $row["status"] ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "0 results";
                }
                echo "</table>";
                $db->close();
                ?>                
            </tbody>
        </table>
    </div>
</div>

<?php
include 'footer.php';

