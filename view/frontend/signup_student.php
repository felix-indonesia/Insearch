<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>User Signup Form</title>
    <?php include 'frontend/includes/head.php';?>
</head>
    
<body class='page'>
<?php include 'frontend/includes/menu.php';?>   
    
<main class='content content-ex'>
<section class='section bg-white'>
    <div class="container container-responsive">
        <div class='block block-top'>
            <h4>User Signup Form</h4>
        </div>
        
        
        <div class="contentpanel contentpanel-wizard">
                       
        <div class="row">
            <div class="col-md-12">

                <form method="POST" action='' id="form">  
                <div class="tab-content">
                    <div class="row">
                        <div class="errorForm col-sm-12"></div>
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input  type="text" class="form-control input-lg firstname" placeholder='First Name' name='firstname' title='Enter your first name' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input  type="text" class="form-control input-lg lastname" placeholder='Lastname Name' name='lastname' title='Please enter your last name' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-smile-o fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" placeholder='Preferred Name' name='nickname'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-send fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg email" placeholder='Personal Email (Not Insearch email)' name='email' title='Please enter your email' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" placeholder='Phone Number' name='phone' id='phone'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" placeholder='Address' name='address'/>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-2">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Day of Birth</option>
                                <?php
                                    for($i = 1; $i <= 31; $i++)
                                    {
                                        echo "<option value='".$i."'>".$i."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-2">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Month of Birth</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                               
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-2">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Year of Birth</option>
                                <?php
                                    for($f = 1970; $f <= 2006; $f++)
                                    {
                                        echo "<option value='".$f."'>".$f."</option>";
                                    }

                              ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-3">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Gender</option>
                                <option value='0'>Female</option>
                                <option value='1'>Male</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-3">
                          <select class="form-control input-lg" name="studytype">
                                <option selected>Currently studying</option>
                                <option value='0'>Foundation</option>
                                <option value='1'>Diploma</option>
                                <option value='2'>Not Insearch Student</option>
                            </select>
                        </div>
                        
                    </div>
                                        
                </div><!-- tab-content -->
                                    

<button type="submit" class="btn btn-orange btn-lg pull-right"><i class='fa fa-check fa-fw'></i> Submit</button>
<div class='clear'></div>
                                    
                                </form><!-- panel-wizard -->
                
                <hr>
                            </div><!-- col-md-6 -->
                        </div><!-- row -->
<a href='<?php echo $server_root;?>/signup/volunteer'><div class='but but-dark but-350 centered'>Create a volunteer account instead <i class='fa fa-caret-right fa-fw'></i></div></a>   
                    </div><!-- contentpanel -->
    </div>
</section>
    
    

</main>
    
<?php include 'frontend/includes/footer.php';?>    
</body>
<?php include 'frontend/includes/js.php';?>  


<script src="<?php echo $server_root;?>/assets/js/bootstrap-wizard.min.js"></script>
<script src="<?php echo $server_root;?>/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo $server_root;?>/assets/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo $server_root;?>/assets/js/select2.min.js"></script>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    
<script>
    jQuery(document).ready(function($) {
        // Wizard With Form Validation
        jQuery('#valWizard').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                tab.prevAll().addClass('done');
                tab.nextAll().removeClass('done');
                tab.removeClass('done');

                var $total = navigation.find('li').length;
                var $current = index + 1;

                if($current >= $total) {
                    $('#valWizard').find('.wizard .next').addClass('hide');
                    $('#valWizard').find('.wizard .finish').removeClass('hide');
                } else {
                    $('#valWizard').find('.wizard .next').removeClass('hide');
                    $('#valWizard').find('.wizard .finish').addClass('hide');
                }
            },
            onTabClick: function(tab, navigation, index) {
                return false;
            },
            onNext: function(tab, navigation, index) {
                var $valid = jQuery('#valWizard').valid();
                /*if(!$('.firstname').val() || !$('.lastname').val() || !$('.email').val())
                {
                    return false;
                }*/
                
            }
        });
        
        // Error Message In One Container
        jQuery("#valWizard").validate({
            errorLabelContainer: jQuery("#valWizard div.errorForm")
        });
        
        jQuery("#phone").mask("99 9999 9999");
        tinymce.init({selector:'.tiny'});
        jQuery("#select-multi").select2();        

    });
</script>
</html>