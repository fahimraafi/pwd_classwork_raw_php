<?php require_once('header.php'); ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card widget widget-status">
            <div class="card-header mt-4" style="font-size: 25px">
                Add Facts
            </div>

            <div class="card-body">
                <form action="./add_facts_post.php" method="post">

                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter Fact Title" name="facts_title">

                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter Fact Icon" name="facts_icon">
                    
                    <input class="form-control form-control-lg m-b-sm mt-4" type="number" placeholder="Enter Fact Quantity" name="facts_qty">

                    <select name="facts_status" class="form-control form-control-lg m-b-sm mt-4">
                        <option value="active"> Active </option>
                        <option value="deactive" > Deactive </option>
                    </select>

                    <button class="btn btn-success m-auto text-center mt-2 mb-5" type="submit" name="add_fact">
                       Add Fact
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>