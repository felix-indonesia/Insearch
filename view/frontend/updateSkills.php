<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Update Profile</title>
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
                    <h4>My Skills</h4>
                    <div class='details'>
                    <div class='row'>
                        <div class='col-sm-12'>
                        <form method="POST" action='' id="form">  
                        <div class="tab-content">
                            <div class="errorForm col-sm-12"></div>
                            <div class='form-group col-sm-12'>
                                <div class='area-desc'></div>
                                <textarea class='form-control tiny' name='about'>Lorem Ipsum Dolor</textarea>
                            </div>
                           
                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-orange btn-lg pull-right" name='updateAbout'><i class='fa fa-floppy-o fa-fw'></i> Save</button>                               <div class='clear'></div>
                            </div>
                        
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div> 
            
            
            
            <div class='col-sm-4 col-md-4 pt-15'>
                <a href='<?php echo $server_root?>/profile/update/personal'><div class="blog-link shadow">
                    <h3><i class='fa fa-user fa-fw'></i> Update your details</h3>
                </div></a>
                
                <a href='<?php echo $server_root?>/profile/update/about'><div class="blog-link shadow">
                    <h3><i class='fa fa-info fa-fw'></i> Update your description</h3>
                 
                </div></a>
                
                <a href='<?php echo $server_root?>/profile/update/qualifications'><div class="blog-link shadow">
                    <h3><i class='fa fa-graduation-cap fa-fw'></i> Update your qualifications</h3>
                    
                </div></a>
                
                <a href='<?php echo $server_root?>/profile/update/experience'><div class="blog-link shadow">
                    <h3><i class='fa fa-refresh fa-fw'></i> Update your experience</h3>
                
                </div></a>
            </div>
        
        </div>
    </div>
</section>
    
    

</main>
    
<?php include 'frontend/includes/footer.php';?>    
</body>
<?php include 'frontend/includes/js.php';?>  
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
    jQuery(document).ready(function($) {        
        tinymce.init({selector:'.tiny'}); 
    });
</script>
</html>