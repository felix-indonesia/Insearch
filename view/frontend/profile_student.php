<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Profile</title>
    <?php include 'frontend/includes/head.php';?>
</head>
    
<body class='page'>
<?php include 'frontend/includes/menu.php';?>   
    
<main class='content content-ex'>
<section class='section'>
    <div class="container container-fluid">
        <div class='row'>
            <div class='col-sm-8 col-md-8'>
                <div class="blog blog-main shadow">
                    <h4>Bounthanh Chandarah</h4>
                    <div class='details'>
                    <div>
                        <div class='col-sm-12'>
                            <div class='details'>
                                <div class='item'><i class='fa fa-birthday-cake fa-fw'></i> 23 May 1991</div>
                                <div class='item'><i class='fa fa-mobile fa-fw'></i> 04 2294 2032</div>
                                <div class='item'><i class='fa fa-send fa-fw'></i> bt@insearch.edu.au</div>
                                <div class='item'><i class='fa fa-graduation-cap fa-fw'></i> Foundation</div>
                                <div class='item'><i class='fa fa-map-marker fa-fw'></i> 22 Jump St, Bondi NSW 2019</div>
                            </div>
                        </div>
                        
                        <a href='<?php echo $server_root;?>/profile/student/update'><div class='but but-dark centered but-350'><i class='fa fa-pencil fa-fw'></i> Update Profile </div></a>
                    </div>
                    </div>
                </div>
                
            </div> 
            
            
            
            <div class='col-sm-4 col-md-4'>
                <div class="blog shadow bg-white">
                    <h4>3 Tickets</h4>
                    <p class='next'>102411021415 | <a href='<?php echo $server_root?>/ticket/102411021415'>Insearch Masquerade Ball</a></p>
                    <p class='next'>102411021409 | <a href='<?php echo $server_root?>/ticket/102411021415'>Insearch Movie Night</a></p>
                    <p class='next'>10241102143 | <a href='<?php echo $server_root?>/ticket/102411021415'>Wet'n'Wild</a></p>
                    
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