<?php require_once('header.php'); ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card widget widget-status">
            <div class="card-header mt-4" style="font-size: 25px">
                Edit Facts
            </div>

            <?php 
            $id = $_GET['facts_id'];
            $edit_facts_query = "SELECT * FROM facts WHERE facts_id = '$id'";
            $edit_facts_query_execution = mysqli_query($db_connect,$edit_facts_query);
            $edit_facts_query_assoc = mysqli_fetch_assoc($edit_facts_query_execution);
            
            ?>

            <div class="card-body">
                <form action="./edit_facts_post.php" method="post" >

                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter Fact Title" name="facts_title" value="<?=$edit_facts_query_assoc['facts_title']; 
                    print_r($edit_facts_query_assoc['facts_title'])
                    ?>">

                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter Fact Icon" name="facts_icon" value="<?=$edit_facts_query_assoc['facts_icon'] ?>" >
                    
                    <input class="form-control form-control-lg m-b-sm mt-4" type="number" placeholder="Enter Fact Quantity" name="facts_qty" value="<?=$edit_facts_query_assoc['facts_qty'] ?>" >

                    <select name="facts_status" class="form-control form-control-lg m-b-sm mt-4">
                        <option value="<?=$edit_facts_query_assoc['facts_status'];?>"> Active </option>
                        <option value="<?=$edit_facts_query_assoc['facts_status'];?>" > Deactive </option>
                    </select>

                    <button class="btn btn-success m-auto text-center mt-2 mb-5" type="submit" name="update_fact">
                       Update Fact
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>