<?php require_once('header.php'); ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Table Head Options</h5>
    </div>
    <div class="card-body">
        <!-- View porfolios query start -->
        <?php 
        $view_portfolio_query = "SELECT portfolio_id, portfolio_category, portfolio_title, portfolio_image, portfolio_status FROM portfolios";
        $view_portfolio_query_execution = mysqli_query($db_connect, $view_portfolio_query);
        ?>
        <!-- View porfolios query end -->
        <div class="example-container">
            <div class="example-content">
                <table class="table">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th scope="col">#SN</th>
                            <th scope="col">Portfolio ID</th>
                            <th scope="col">Portfolio Category</th>
                            <th scope="col">Portfolio Title</th>
                            <th scope="col">Portfolio Image</th>
                            <th scope="col">Portfolio Status</th>
                            <th scope="col">Edit Portfolio</th>
                            <th scope="col">Delete Portfolio</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($view_portfolio_query_execution as $key => $portfolios): ?>
                        <tr>
                            <th scope="row"> <?=++$key; ?> </th>
                            <td> <?= $portfolios['portfolio_id'] ?> </td>
                            <td> <?= $portfolios['portfolio_category'] ?>  </td>
                            <td> <?= $portfolios['portfolio_title'] ?>  </td>
                            <td> <img src="./uploads/portfolio_images/<?= $portfolios['portfolio_image'] ?>" alt="portfolio_image" width="80" height="80"> </td>
                            <td> <?= $portfolios['portfolio_status'] ?> </td>
                            <td> 
                                <a href="./edit_portfolio.php?portfolio_id=7" class="btn btn-success" >
                                    Edit
                                </a>
                            </td>
                            <td> 
                                <a href="#" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>