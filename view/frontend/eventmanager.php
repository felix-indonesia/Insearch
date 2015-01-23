<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Insearch Masquerade Ball</title>
    <?php include 'frontend/includes/head.php';?>
</head>
    
<body class='page'>
<?php include 'frontend/includes/menu.php';?>   
    
<main class='content content-ex'>
<section class='section'>
    <div class="container container-responsive">
        <div class='row'>
            <div class='col-sm-8 col-md-8'>
                <div class="blog blog-main shadow">
                    <h4>Semester 1 Diploma Orientation</h4>
                    <a href='<?php echo $server_root;?>/events/upcoming'><div class='btn-black-transparent transition bounce-in'><i class='fa fa-refresh fa-fw'></i> All Sign Out</div></a>
                    <div class="clear pb-2x"></div>
                    
                    <div class='table-responsive'>
                        <table class='table table-striped'>
                            <colgroup>
                                <col class='col-xs-1'>
                                <col class='col-xs-5'>
                                <col class='col-xs-1'>
                                <col class='col-xs-1'>
                                <col class='col-xs-2'>
                            </colgroup>
                            
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>In</th>
                                    <th>Out</th>
                                    <th>Sign In/Out</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>12345</td>
                                    <td>Felix Gozali</td>
                                    <td>8:28</td>
                                    <td>--:--</td>
                                    <td><a href='' type='button' class='btn btn-danger btn-block'><i class='fa fa-arrow-left fa-fw'></i> Sign Out</a></td>
                                </tr>
                                <tr>
                                    <td>12345</td>
                                    <td>Habibi</td>
                                    <td>--:--</td>
                                    <td>--:--</td>
                                    <td><a href='' type='button' class='btn btn-dark-grey btn-block'><i class='fa fa-arrow-right fa-fw'></i> Sign In</a></td>
                                </tr>
                                <tr>
                                    <td>12345</td>
                                    <td>Jeff Wang</td>
                                    <td>8:31</td>
                                    <td>--:--</td>
                                    <td><a href='' type='button' class='btn btn-danger btn-block'><i class='fa fa-arrow-left fa-fw'></i> Sign Out</a></td>
                                </tr>
                                <tr>
                                    <td>12345</td>
                                    <td>Merelien Wang</td>
                                    <td>8:28</td>
                                    <td>--:--</td>
                                    <td><a href='' type='button' class='btn btn-danger btn-block'><i class='fa fa-arrow-left fa-fw'></i> Sign Out</a></td>
                                </tr>
                                <tr>
                                    <td>12345</td>
                                    <td>Yilin Yao</td>
                                    <td>8:32</td>
                                    <td>11:25</td>
                                    <td><a href='' type='button' class='btn btn-dark-grey btn-block'><i class='fa fa-arrow-right fa-fw'></i> Sign In</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                    <div class='volunteers-list'>
                        <a href=''><div class='vol sign-in row'>
                            <div class='vol-details col-xs-7'>
                                <h4><i class='fa fa-arrow-right fa-fw'></i> 
                                    12345 | Bounthanh Chandarah</h4>
                            </div>
                            <div class='vol-timing col-xs-5'>
                                <h4>8:32 AM - 12:05 PM</h4>
                            </div>
                        </div></a>
                        <a href=''><div class='vol sign-out row'>
                            <div class='vol-details col-xs-7'>
                                <h4><i class='fa fa-arrow-left fa-fw'></i> 
                                    12345 | Bounthanh Chandarah</h4>
                            </div>
                            <div class='vol-timing col-xs-5'>
                                <h4>8:32 AM - --:--</h4>
                            </div>
                        </div></a>
                        <a href=''><div class='vol sign-in row'>
                            <div class='vol-details col-xs-7'>
                                <h4><i class='fa fa-arrow-right fa-fw'></i> 
                                    12345 | Bounthanh Chandarah</h4>
                            </div>
                            <div class='vol-timing col-xs-5'>
                                <h4>--:-- - --:--</h4>
                            </div>
                        </div></a>
                    </div>
            </div> 
            
            
            
            <div class='col-sm-4 col-md-4 pt-15'>
                <div class="blog-link shadow transition bounce-in-left">
                    <h3><i class='fa fa-th fa-fw'></i> Event Manager</h3>
                    <p>Bounthanh Chandarah</p>
                </div>
                
                <div class="blog-link shadow transition bounce-in-left">
                    <ul class="list-unstyled">
                        <li><i class='fa fa-calendar fa-fw'></i> 18 - 20 May 2015</li>
                        <li><i class='fa fa-clock-o fa-fw'></i> 8:30 AM - 2:00 PM</li>
                        <li><i class='fa fa-users fa-fw'></i> 45/50 Expected</li>
                        <li><i class='fa fa-users fa-fw'></i> 5 Attended</li>
                    </ul>
                </div>
                
            </div>
            
        
        </div>
    </div>
</section>
    
    

</main>
    
<?php include 'frontend/includes/footer.php';?>    
</body>
<?php include 'frontend/includes/js.php';?>  
</html>