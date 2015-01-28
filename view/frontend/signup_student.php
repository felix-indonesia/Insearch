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
                      
            <?php
            if(isset($message))
            {
                echo '
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        '.$message.'
                    </div>
                ';
            }
            if(isset($error))
            {
                echo '
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        '.$error.'
                    </div>
                ';
            }
            ?>
        <div class="row">
            <div class="col-md-12">

                <form method="POST" action='' id="defaultForm">  
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
                            <input  type="email" class="form-control input-lg email" placeholder='Personal Email (Not Insearch email)' name='email' title='Please enter your email' data-fv-emailaddress-message="Please check your email" required/>
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
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input  type="password" class="form-control input-lg" placeholder='Password' name='password' id='password1' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input  type="password" class="form-control input-lg" placeholder='Confirm Password' name='confirmPassword' id='password2' data-fv-identical="true" data-fv-identical-field="password" data-fv-identical-message="Your passwords should match" required/>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-2">
                          <select class="form-control input-lg" name="dob">
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
                          <select class="form-control input-lg" name="mob">
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
                          <select class="form-control input-lg" name="yob">
                                <option selected>Year of Birth</option>
                                <?php
                                    $min = date('Y') - 13;
                                    for($f = 1960; $f <= $min; $f++)
                                    {
                                        echo '<option value="'.$f.'">'.$f.'</option>';
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
                          <select class="form-control input-lg" name="study">
                                <option selected>Currently studying</option>
                                <option value='1'>Foundation</option>
                                <option value='2'>Diploma</option>
                                <option value='3'>Not Insearch Student</option>
                            </select>
                        </div>
                        
                    </div>
                                        
                </div><!-- tab-content -->
                                    

<button type="submit" class="btn btn-orange btn-lg pull-right" name='signupStudent'><i class='fa fa-check fa-fw'></i> Submit</button>
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




<script src="<?php echo $server_root;?>/assets/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo $server_root;?>/assets/js/formValidation.js"></script>
<script type="text/javascript" src="<?php echo $server_root;?>/assets/js/bootstrap-validation.js"></script>
   
<script type="text/javascript">
$(document).ready(function(){
    $('#defaultForm').formValidation({
        framework: 'bootstrap',
        fields: {
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a password'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Password should be between 6 and 30 characters long'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'Please confirm your password'
                    }
                }
            }
        }
    });
    
    jQuery("#phone").mask("99 9999 9999");
});    
</script>
</html>