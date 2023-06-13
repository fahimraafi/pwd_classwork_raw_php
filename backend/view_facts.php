<?php require_once('header.php'); ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">List of Facts</h5>
    </div>
    <div class="card-body">
        <!-- View facts query start -->
        <?php 
        $view_facts_query = "SELECT facts_id, facts_title, facts_icon, facts_qty,facts_status FROM facts";
        $view_facts_query_execution = mysqli_query($db_connect, $view_facts_query);
        
        ?>
        <!-- View facts query end -->
        <div class="example-container">
            <div class="example-content">
                <table class="table">
                    <thead class="table-dark">
                        <tr class="text-center align-middle">
                            <th scope="col">#SN</th>
                            <th scope="col">Facts ID</th>
                            <th scope="col">Facts Title</th>
                            <th scope="col">Facts Icon</th>
                            <th scope="col">Facts Quantity</th>
                            <th scope="col">Facts Status</th>
                            <th scope="col">Edit Facts</th>
                            <th scope="col">Delete Facts</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($view_facts_query_execution as $key => $facts): ?>
                        <tr>
                            <th scope="row"> <?=++$key; ?> </th>
                            <td> <?= $facts['facts_id'] ?> </td>
                            <td> <?= $facts['facts_title'] ?>  </td>
                            <td> <?= $facts['facts_icon'] ?>  </td>
                            <td> <?= $facts['facts_qty'] ?> </td>
                            <td> <?= $facts['facts_status'] ?> </td>
                            <td> 
                                <a href="edit_facts.php?facts_id=2" class="btn btn-success" >
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