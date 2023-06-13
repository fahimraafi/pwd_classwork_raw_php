<?php
require_once('header.php');
?>

<div class="row">
    <div class="col-xl-12">
        <div class="card widget widget-list">
            <div class="card-header">
                <h5 class="card-title">All Services<span class="badge badge-success badge-style-light" style="font-size: 16px">
                    </span>
                </h5>
            </div>
            <div class="card-body">

                <?php
                $service_data_retrieve_query = "SELECT `service_id`, `service_name`, `service_description`, `service_icon`, `service_status` FROM `services`";
                $service_data_retrieve_implementation = mysqli_query($db_connect, $service_data_retrieve_query);
                ?>

                <div class="example-container">
                    <div class="example-content">
                        <table class="table">
                            <thead class="table-dark">
                                <tr class="text-center align-middle">
                                    <th scope="col">#SN</th>
                                    <th scope="col">Service ID</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Service Description</th>
                                    <th scope="col">Service Icon</th>
                                    <th scope="col">Service Status</th>
                                    <th scope="col">Edit Service</th>
                                    <th scope="col">Delete Service</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($service_data_retrieve_implementation as $key => $services) : ?>
                                    <tr>
                                        <th scope="row"> <?= ++$key; ?> </th>
                                        <td> <?= $services['service_id'] ?> </td>
                                        <td> <?= $services['service_name'] ?> </td>
                                        <td> <?= $services['service_description'] ?> </td>
                                        <td> <?= $services['service_icon'] ?> </td>
                                        <td> <?= $services['service_status'] ?> </td>
                                        <td>
                                            <a href="edit_service.php" class="btn btn-success">
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
    </div>





    <?php
    require_once('footer.php');
    ?>