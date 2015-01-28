<header class='content'>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="nav-container container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand nav-to logo" href="<?php echo $server_root;?>/"></a>
        </div>
 
        <div class="navbar-collapse collapse"> 
            <ul class="nav navbar-nav navbar-right">
                <li><a href='<?php echo $server_root;?>/'>Home</a></li>
                <li><a href="<?php echo $server_root;?>/events/upcoming">Events</a></li>
                <li><a class="nav-to" href="#services">What we do</a></li>
                <li><a class="nav-to" href="<?php echo $server_root;?>/faq/">Help</a></li>
                
                <?php
                if(isset($perso)){
                    if($perso->isStudent()){
                        $link = 'student';
                    }
                    elseif($perso->isVolunteer() || $perso->isAdmin()){
                        $link = 'volunteer';
                    }
                    
                    echo "<li><a class='nav-to' href='".$r."/profile/".$link."'>Hi, ".$perso->getNickName()."</a></li>";
                }

                else{
                    echo "<li><a class='nav-to' href='#signup' data-toggle='modal' data-target='.bs-modal-sm'>Sign In</a></li>";
                }
                
                ?>
                
                
               </ul>
        </div>
    </div>
</div> 
</header>