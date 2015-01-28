<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Account Activation</title>
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
                    
                    <?php if(isset($message)){?>
                    <h4>Activation Successful</h4>
                    <div class='details'>
                        <div class='item'><?php echo $message ;?></div>
                    </div>
                    
                    <a href="#signup" data-toggle="modal" data-target=".bs-modal-sm"><div class='but but-dark centered but-350'>Sign In <i class='fa fa-caret-right'></i> </div></a>
                    <?php }elseif(isset($error)){?>
                    
                    <h4><i class='fa fa-frown-o fa-fw'></i> Hum... something went wrong</h4>
                    <div class='details'>
                        <div class='item'><?php echo $error ;?></div>
                    </div>
                    <?php }?>
                    
                    <div class='clear'></div>
                    
                    
                </div>
            </div> 
            
            
            
            <div class='col-sm-4 col-md-4'>
                <div class="blog shadow bg-white align-center">
                    <h4>Check These Upcoming</h4>
                </div>
                
                <div class="shadow bg-white align-center">
                    <a href='<?php echo $server_root;?>/event/1024/insearch-masquerade-ball'><img src="<?php echo $server_root;?>/images/sm/events/event.jpg" class="img-responsive"></a>
                    <p class='fs20 orange pd-1x'>Accoustic Jam Session</p>
                </div>
                
                <div class="shadow bg-white align-center">
                    <a href='<?php echo $server_root;?>/event/1024/insearch-masquerade-ball'><img src="<?php echo $server_root;?>/images/sm/events/event3.jpg" class="img-responsive"></a>
                    <p class='fs20 orange pd-1x'>Mediation for beginners</p>
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