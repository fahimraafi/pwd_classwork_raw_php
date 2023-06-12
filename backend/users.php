<?php 
require_once('header.php');
?>
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card widget widget-list" style="height: 465px; overflow-y: scroll;">
                                    <div class="card-header">
                                        <h5 class="card-title">Active users<span class="badge badge-success badge-style-light" style="font-size: 16px"> <?php 
                                        $active_user_number_query = "SELECT COUNT(*) AS numbers FROM users";
                                        $active_user_query_number_final = mysqli_query($db_connect, $active_user_number_query);
                                        $active_user_assoc = mysqli_fetch_array($active_user_query_number_final)['numbers'];
                                        print_r($active_user_assoc);
                                        ?> </span></h5>
                                    </div>
                                    <div class="card-body">

                                        <?php
                                        $user_data_fetch_query = "SELECT `ID`, `name`, `email` FROM `users`";
                                        $user_data_fetch_final = mysqli_query($db_connect, $user_data_fetch_query);
                                        ?>
                                        
                                        <ul class="widget-list-content list-unstyled">
                                            
                                            <?php foreach ($user_data_fetch_final as $key => $users): ?>
                                            
                                            <li class="widget-list-item widget-list-item-green">
                                                <span class="widget-list-item-icon d-flex justify-content-center align-items-center"> <?= $key+1; ?> </span>
                                                <span class="widget-list-item-description">

                                                    <a href="#" class="widget-list-item-description-title">
                                                       <?= $users['name'];?>
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        <?= $users['email']?>
                                                    </span>
                                                    <br>
                                                    <span class="widget-list-item-description-subtitle">
                                                       ID: <?= $users['ID']?>
                                                    </span>
                                                    
                                                </span>
                                            </li>
                                            
                                            <?php endforeach; ?>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Todo<span class="badge badge-success badge-style-light">14 completed</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <span class="text-muted m-b-xs d-block">showing 5 out of 23 active tasks.</span>
                                        <ul class="widget-list-content list-unstyled">
                                            <li class="widget-list-item widget-list-item-green">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        Dashboard UI optimisations
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Oskar Hudson
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-blue">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        Mailbox cleanup
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Woodrow Hawkins
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-purple">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        Header scroll bugfix
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Sky Meyers
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-yellow">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        Localization for file manager
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Oskar Hudson
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="widget-list-item widget-list-item-red">
                                                <span class="widget-list-item-check">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                    </div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        New E-commerce UX/UI design
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                        Oskar Hudson
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
<?php 
require_once('footer.php');
?>                       
                        
                    

