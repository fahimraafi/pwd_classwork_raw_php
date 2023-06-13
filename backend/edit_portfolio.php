<?php require_once('header.php'); ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card widget widget-status">
            <div class="card-header mt-4" style="font-size: 25px">
                Edit Portfolio
                <?php 
                $id = $_GET["portfolio_id"];
                $edit_portfolio_query = "SELECT * FROM portfolios WHERE portfolio_id = $id";
                $edit_portfolio_query_execution = mysqli_query($db_connect, $edit_portfolio_query);
                $edit_portfolio_query_assoc = mysqli_fetch_assoc($edit_portfolio_query_execution);
                ?>

            </div>
   

            <div class="card-body">
                <form action="add_portfolio_post.php" method="post" enctype="multipart/form-data" >

                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter New Portfolio Category" name="portfolio_category" value="<?=$edit_portfolio_query_assoc['portfolio_category'];?>" >

                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter New Portfolio Title" name="portfolio_title" value="<?=$edit_portfolio_query_assoc['portfolio_title'];?>" >
                    
                    <input class="form-control form-control-lg m-b-sm mt-4" type="file" name="portfolio_image">
                    <img src="./uploads/portfolio_images/<?= $edit_portfolio_query_assoc['portfolio_image'] ?>" alt="portfolio_image" width="80" height="80">

                    <select name="portfolio_status" class="form-control form-control-lg m-b-sm mt-4">
                        <option value="active"> Active </option>
                        <option value="deactive" > Deactive </option>
                    </select>


                    <button class="btn btn-success m-auto text-center mt-2 mb-5" type="submit" name="add_portfolio">
                       Add Portfolio
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); 
unset($_SESSION["portfolio_data_insert_error"]);
unset($_SESSION["portfolio_upload_successfull"]);
?>