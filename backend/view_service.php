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

                <form action="view_service_post.php" method="post">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="fw-bold text-black text-center">#SN</th>
                                <th scope="col" class="fw-bold text-black text-center">Service ID</th>
                                <th scope="col" class="fw-bold text-black text-center">Service Name</th>
                                <th scope="col" class="fw-bold text-black text-center">Service Description</th>
                                <th scope="col" class="fw-bold text-black text-center">Service Icon</th>
                                <th scope="col" class="fw-bold text-black text-center">Service Status</th>
                                <th scope="col" class="fw-bold text-black text-center">Edit Service</th>
                                <th scope="col" class="fw-bold text-black text-center"> Delete Service </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($service_data_retrieve_implementation as $key => $services) : ?>
                                <tr>
                                    <th scope="row" class="align-middle"> <?= ++$key; ?> </th>
                                    <td class="align-middle"> <?= $services['service_id']; ?> </td>
                                    <td class="align-middle"> <?= $services['service_name']; ?> </td>
                                    <td class="align-middle"> <?= $services['service_description']; ?> </td>
                                    <td class="align-middle"> <?= $services['service_icon']; ?> </td>
                                    <td class="align-middle"> <?= $services['service_status']; ?> </td>
                                    <td class="align-middle"> 
                                        <button type="submit" class="btn btn-success" name="edit_service"> Edit </button> 
                                    </td>
                                    <td class="align-middle"> 
                                        <button type="submit" class="btn btn-danger" name="delete_service"> Delete </button>
                                    </td>


                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </form>


            </div>
        </div>
    </div>
</div>





<?php
require_once('footer.php');
?>