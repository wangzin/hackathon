<div id="preloader">
    <div class="loader"></div>
</div>
<header class="header-area">
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="top-header-content">
                        <a href="#"><i class="icon_phone"></i> <span><?=$generalinfo->Contact_Number;?> </span></a>
                        <a href="#"><i class="icon_mail"></i> <span><?=$generalinfo->Contact_Email;?></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                    <div class="top-header-content">
                       <marquee><span class="text-uppercase text-white"><?=$generalinfo->Site_Name;?></span></marquee> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="top-header-content">
                        <div class="top-social-area ml-auto">
                            <?php if($generalinfo->Contact_Face_Book!=""){?>
                                <a href="<?=$generalinfo->Contact_Face_Book;?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <?php } if($generalinfo->Contact_Twitter!=""){?>
                                <a href="<?=$generalinfo->Contact_Twitter;?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                             <?php } if($generalinfo->Contact_Instegram!=""){?>
                                <a href="<?=$generalinfo->Contact_Instegram;?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            <?php }?>    
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <nav class="classy-navbar justify-content-between" id="robertoNav">
                    <a class="nav-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>uploads/logo/<?=$generalinfo->Logo_Link;?>" alt="" style="width:100px;"></a>
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler" id="tooId"><span></span><span></span><span></span></span>
                    </div>
                    <div class="classy-menu" id="MainMenu">
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="<?php echo base_url();?>"><span class="fa fa-home"></span> Home</a></li>
                                <?php 
                                foreach($menulist as $i=> $menulist):
                                    if($menulist['Submenustatus']=="Y"){
                                ?>
                                <li><a href="#"><?php echo $menulist['MenuName']; ?></a>
                                    <ul class="dropdown">
                                    <?php 
                                        foreach($submenulist as $i=> $sub):
                                            if($sub['MenuId']==$menulist['Id']){
                                    ?>
                                        <li>
                                            <a href="#" onclick="loadpage('<?php echo base_url()?>index.php?websiteController/loadpage/menulinkdetails/<?php echo $sub['Id']?>/submenu')"><?php echo $sub['SubMenuName'] ?></a>
                                        </li>
                                        <?php }  
                                            endforeach; 
                                        ?>
                                    </ul>
                                </li>
                                <?php } else{ if($menulist['Details']!=""){?>
                                <li>
                                    <a href="#" onclick="loadpage('<?php echo base_url()?>index.php?websiteController/loadpage/menulinkdetails/<?php echo $menulist['Id']?>/menu')">
                                        <?php echo $menulist['MenuName']; ?>
                                    </a>
                                </li>
                                <?php } }
                                    endforeach; 
                                ?>  
                                <li><a href="#"><span class="fa fa-taxi"></span> Tour Packages</a>
                                    <div class="megamenu">
                                         <?php  $count = 0;
                                            foreach($tourcategory as $i=> $cat):
                                        ?>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#" onclick="loadpage('<?php echo base_url()?>index.php?websiteController/loadpage/tourList/<?php echo $cat['Id']?>/')"><b><?php echo$cat['Category_Name'];?></b></a></li>
                                                <hr/>
                                                <?php  $count = 0;
                                                    foreach($t_tour_details as $i=> $tour):
                                                        if($cat['Id']==$tour['Category_Id']){                                                ?>
                                                    <li><a href="#" onclick="loadpage('<?php echo base_url()?>index.php?websiteController/loadpage/tourDetails/<?php echo $tour['Id']?>/')"><?php echo$tour['Package_Name'];?></a></li>
                                                <?php  } endforeach;  ?> 
                                            </ul>    
                                        <?php 
                                            endforeach; 
                                        ?> 
                                    </div>
                                </li>
                                <li><a href="#" onclick="loadpage('<?php echo base_url()?>index.php?websiteController/loadpage/contact')"> <span class="fa fa-phone"></span>Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>