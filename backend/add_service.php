<?php require_once('header.php'); ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card widget widget-status">
            <div class="card-header mt-4" style="font-size: 25px">
                Add Service
            </div>
            <div class="card-body">
                <form action="add_service_post.php" method="post">
                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter New Serice Name" name="service_name">
                    <textarea class="form-control form-control-lg m-b-sm mt-4" cols="30" rows="10" placeholder="Enter New Description" name="service_description"> </textarea>
                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter New Icon" name="service_icon">
                    <select name="service_status" class="form-control form-control-lg m-b-sm mt-4">
                        <option value="active"> Active </option>
                        <option value="deactive" > Deactive </option>
                    </select>
                    <button class="btn btn-success m-auto text-center mt-2 mb-5" type="submit" name="add_service">
                       Add Service
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>