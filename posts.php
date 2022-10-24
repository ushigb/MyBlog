<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'msg.php';
include 'head.php';
include 'nav.php';
?>

<div class="container-fluid mtb-margin-top">    
    <div class="row">
        <div class="col-md-12">
            <?php
            $limit = 6;
            $adjacents = 2;
            $sql = "SELECT COUNT(*) 'total_rows' FROM `posts` WHERE user_id=" . $_GET['user_id'];
            $res = mysqli_fetch_object(mysqli_query($db, $sql));
            $total_rows = $res->total_rows;
            $total_pages = ceil($total_rows / $limit);

            if (isset($_GET['page']) && $_GET['page'] != "") {
                $page = $_GET['page'];
                $offset = $limit * ($page - 1);
            } else {
                $page = 1;
                $offset = 0;
            }

            $query = "SELECT * FROM posts WHERE user_id=" . $_GET['user_id'] . " order by ID desc limit $offset, $limit";
            $result = $db->query($query);
            ?>


            <div class="row">
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-3  card-content">'
                    ?>
                    <a href="sort.php?category=<?php echo $row['category'] ?>"
                       class="category"><?php echo $row['category'] ?></a>
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/nature" alt="">                            
                    </div>
                    <div class="card-desc">
                        <h3><?php echo $row["title"] ?></h3>
                        <p class="text-truncate"><?php echo $row["post_text"] ?></p>
                        <a href="readTextA.php?post_id=<?php echo $row["id"] ?>" class="btn-card">Read</a>                            
                    </div></div>

                <?php
            }

            $db->close();
            ?>  
        </div>
        <?php
        if ($total_pages <= (1 + ($adjacents * 2))) {
            $start = 1;
            $end = $total_pages;
        } else {
            if (($page - $adjacents) > 1) {
                if (($page + $adjacents) < $total_pages) {
                    $start = ($page - $adjacents);
                    $end = ($page + $adjacents);
                } else {
                    $start = ($total_pages - (1 + ($adjacents * 2)));
                    $end = $total_pages;
                }
            } else {
                $start = 1;
                $end = (1 + ($adjacents * 2));
            }
        }
        ?>


<?php if ($total_pages > 1) { ?>
            <ul class="pagination pagination-sm justify-content-center">
                <!-- Link of the first page -->
                <li class='page-item <?php ($page <= 1 ? print 'disabled' : '') ?>'>
                    <a class='page-link' href='?page=1'>&lt;&lt;</a>
                </li>
                <!-- Link of the previous page -->
                <li class='page-item <?php ($page <= 1 ? print 'disabled' : '') ?>'>
                    <a class='page-link' href='?page=<?php ($page > 1 ? print($page - 1) : print 1) ?>'>&lt;</a>
                </li>
                <!-- Links of the pages with page number -->
    <?php for ($i = $start; $i <= $end; $i++) { ?>
                    <li class='page-item <?php ($i == $page ? print 'active' : '') ?>'>
                        <a class='page-link' href='?page=<?php echo $i; ?>'><?php echo $i; ?></a>
                    </li>
    <?php } ?>
                <!-- Link of the next page -->
                <li class='page-item <?php ($page >= $total_pages ? print 'disabled' : '') ?>'>
                    <a class='page-link' href='?page=<?php ($page < $total_pages ? print($page + 1) : print $total_pages) ?>'>&gt;</a>
                </li>
                <!-- Link of the last page -->
                <li class='page-item <?php ($page >= $total_pages ? print 'disabled' : '') ?>'>
                    <a class='page-link' href='?page=<?php echo $total_pages; ?>'>&gt;&gt;</a>
                </li>
            </ul>
<?php } ?>
    </div>
</div>


<?php
include 'footer.php';
