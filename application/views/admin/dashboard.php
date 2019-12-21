<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('admin/css.php'); ?> 
    <body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
        	<?php $this->load->view('admin/header.php'); ?> 
        	<?php $this->load->view('admin/nav.php'); ?> 
		 	<div class="content-wrapper">
		 		<div id="mainContentdiv">
			     	<section class="content">
			     		<div class="row">
					        <section class="col-lg-8 connectedSortable">
					        	<div class="box box-success">
						            <div class="box-header">
						              <i class="fa fa-desktop"></i>
						              <h3 class="box-title">Guidelines</h3>
						            </div>
						            <div class="box-body chat" id="">
						            	<ul class="timeline">
								            <li class="time-label">
							                  	<span class="bg-red">
								                   Approval of Note sheet for company 	
							                  	</span>
								            </li>
							             	
								            <li>
								              <i class="fa fa-envelope-o bg-yellow"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">You will recieve messages, booking and other details. To check, you need to click on message icon near profile menu at top</h3>
								              </div>
								            </li>
								            <li>
								              <i class="fa fa-laptop bg-blue"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">Change your site name, logo, logo initial, and contact detaials from <b>Contacts and others</b> link</h3>
								              </div>
								            </li>
								            <li>
								              <i class="fa fa-navicon bg-success"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">You can add, edit and delete menus and submenus. To do that, please click on  <b>Menus and Sub menus</b> link</h3>
								              </div>
								            </li>
								            
								        </ul>
						            </div>
						            <div class="box-footer">
						              
						            </div>
					          	</div>
					        </section>
					        <section class="col-lg-4 connectedSortable">
					        	<div class="box box-solid bg-green-gradient">
						            <div class="box-header">
						              <i class="fa fa-calendar"></i>
						              <h3 class="box-title">Calendar</h3>
						              <div class="pull-right box-tools">
						                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
						                </button>
						                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
						                </button>
						              </div>
						            </div>
						            <div class="box-body no-padding">
						              <div id="calendar" style="width: 100%">
						              	
						              </div>
						            </div>
						          </div>
					        </section>
					    </div>
			     	</section>
		     	</div>
			</div>
			
	        <?php
			    $this->load->view('admin/footer.php');
			?> 
        </div> 
	</body>
</html> 

