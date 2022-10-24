<?php
include 'functions.php';
include 'session.php';
include 'header.php';
include 'head.php';
include 'checkStatus.php';
?>
<form method="post" enctype="multipart/form-data">
    <div class="container">
        <?php echo display_error(); ?>
        <div class= "all_cards" >
            <h4>
                <label>Title:</label>
            </h4>
            <input type="text" name="title"  >
        </div>
        <div class= "all_cards">
            <h4>
                <label>Text:</label>
            </h4>
            <textarea class="form-control" name="text" rows="7"></textarea>
        </div>    
        <div class= "all_cards"  >
            <h4>
                <label>Category:</label>
            </h4>
            <select  name="Category" >                    
                <option value="sport">Sport</option>
                <option value="social">Social</option>
                <option value="movie">Movie</option>
                <option value="music">Music</option>
                <option value="nature">Nature</option>
                <option value="history">History</option>
            </select>
        </div>
        <div class= "all_cards" > 
            <!--            <div class="img-circle">                   
                                <img class="profile-pic" src=>                
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" type="file" name="upload" accept="image/*"/>               
                                </div>
                            </div>-->

            <!---->

            <div class="input-group-access">
                <button type="submit" class="btn btn-secondary" name="add_btn">Add</button>                    
            </div>

            <!--<button type="submit" class="btn btn-secondary" name="add_btn">Add</button>-->
            <a href="index.php"  class="btn btn-info" name="back">Back</a>
        </div>

    </div></form>

<?php
include 'footer.php';


