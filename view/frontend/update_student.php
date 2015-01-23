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
        <div class="contentpanel contentpanel-wizard">
        <h2>Bounthanh Chandarah</h2>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action='' id="form">  
                <div class="tab-content">
                    <div class="row">
                        <div class="errorForm col-sm-12"></div>
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input  type="text" class="form-control input-lg firstname" name='firstname' value='Bounthanh' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input  type="text" class="form-control input-lg lastname" value='Chandarah' name='lastname' title='Please enter your last name' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-smile-o fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" value='BT' name='nickname'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-send fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg email" value='bt@gmail.com' name='email' title='Please enter your email' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" value='04 2294 2032' name='phone' id='phone'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-6'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" value='23 Jump St, Sydney NSW 2000' name='address'/>
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
                                <?php
                                    for($i = 1; $i <= 12; $i++)
                                    {
                                        echo "<option value='".$i."'>".monthToString($i)."</option>";
                                    }
                                ?>
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
                                    

<button type="submit" class="btn btn-orange btn-lg pull-right"><i class='fa fa-floppy-o fa-fw'></i> Save</button>
<div class='clear'></div>
                                    
                                </form><!-- panel-wizard -->
                
                <hr>
                            </div><!-- col-md-6 -->
                        </div><!-- row -->  
            <a href='<?php echo $server_root;?>/signup/volunteer'><div class='but but-dark but-350 centered'>Become a volunteer <i class='fa fa-caret-right fa-fw'></i></div></a> 
                    </div><!-- contentpanel -->
    </div>
</section>
    
    

</main>
    
<?php include 'frontend/includes/footer.php';?>    
</body>
<?php include 'frontend/includes/js.php';?>  

</html>