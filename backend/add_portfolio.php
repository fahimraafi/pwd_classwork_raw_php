<?php require_once('header.php'); ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card widget widget-status">
            <div class="card-header mt-4" style="font-size: 25px">
                Add Portfolio
            </div>
            <div class="card-body">
                <form action="add_portfolio_post.php" method="post" enctype="multipart/form-data" >

                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter New Portfolio Category" name="portfolio_category">

                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter New Portfolio Title" name="portfolio_title">
                    
                    <input class="form-control form-control-lg m-b-sm mt-4" type="file" name="portfolio_image">

                    <select name="portfolio_status" class="form-control form-control-lg m-b-sm mt-4">
                        <option value="active"> Active </option>
                        <option value="deactive" > Deactive </option>
                    </select>

                    <?php if (isset($_SESSION["portfolio_data_insert_error"])): ?>

                        <div class="alert alert-danger">
                            <?=$_SESSION["portfolio_data_insert_error"];?>
                        </div>
                    
                    <?php endif; ?>

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
?>