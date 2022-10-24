<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
include 'nav.php';
include 'checkStatus.php';
?>
<div class="container">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 mess">
        <h2 class="mess-name"><p>Inbox</p></h2>
    </div>
    <div class="col-md-4"></div>
</div>

<div class="row row all_cards">    
    <div class=" col-md-2"></div>
        <div class=" col-md-8">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col-md-4 col-12">User</th>
                    <th scope="col-md-6 col-12">Message</th>
                                   
                </tr>
            </thead> 
            <tbody>
                <tr>            
                    <?php
                    $sql = "SELECT * FROM `messages` WHERE msgTo ='".$_SESSION['user']['username']."'";
                    $result = $db->query($sql);
                    echo "<table";
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>'
                            ?>
                    <td></td>
                            <td><?php echo $row["msgFrom"] ?></td>
                            <td><a class="users_link"
                                   href="readMsg.php?id=<?php echo $row["id"] ?>"><?php echo $row["text"] ?></a></td>                            
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
    <div class=" col-md-2"></div>
</div>
</div>


<?php
include 'footer.php';