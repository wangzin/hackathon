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
								                   Approval of Application 	
							                  	</span>
								            </li>
							             	
								            <li>
								              <i class="fa fa-envelope-o bg-yellow"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">
								                	<ul>
								                		<li>Approval seeker have to apply application and it will be send to reviewers and approver.</li>
								                	</ul>
								                </h3>
								              </div>
								            </li>
								            <li>
								              <i class="fa fa-laptop bg-blue"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">
								                	<ul>
								                		<li>Reviewer will check the application and give comments if needed to applicant.</li>
								                		<li>If application is accepted then it is forwarded for futher review or directly to approver.</li>
								                		<li> Approver will view the application and accept or reject with comments.</li>
								                	</ul>
								                </h3>
								              </div>
								            </li>
								            <li>
								              <i class="fa fa-navicon bg-success"></i>
								              <div class="timeline-item">
								                <h3 class="timeline-header no-border">
								                	<ul>
								                		<li>If Accepted by the approver then PDF can be generated.</li>
								                	</ul>
								                </h3>
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

