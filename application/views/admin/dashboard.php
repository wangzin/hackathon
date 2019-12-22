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
					        
					        <section class="col-lg-6 connectedSortable">
					        	<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'groupId'));?>
					        	<input type="hidden" name="AppNo" id="AppNumber">
					        	<div class="box box-primary">
						            <div class="box-header">
						              <i class="fa fa-desktop"></i>
						              <h3 class="box-title">Group Application</h3>
						            </div>
						            <div class="box-body chat" id="">
						            	<table id="sliderDetails" class="table table-bordered table-striped">
								            <thead>
								              <tr>
								                <th>Sl No#</th>
								                <th>App No</th>
								                <th>Name</th>
								                 <th>Designation</th>
								                <th>Action Date</th>
								              </tr>
								            </thead>
								            <tbody>
							            	 	<?php foreach($Application_List as $i=> $event): ?>
								                <tr>
								                  <td><?=$i+1?></td>
								                  <td> <a href="#" onclick="ApplicationAction('claim','<?php echo $event['Application_Number'];?>')"><?php echo $event['Application_Number'];?></a> </td>
								                  <td> <?php echo $event['Full_Name'];?> </td>
								                  <td> <?php echo $event['Designaiton'];?> </td>
								                  <td> <?php echo $event['Application_Date'];?> </td>
								              	</tr>
								               	<?php endforeach; ?>
								            </tbody>
								        </table>
						            </div>
						        </div>

						        <div class="box box-warning">
						            <div class="box-header">
						              <i class="fa fa-desktop"></i>
						              <h3 class="box-title">Application Assinged to Me</h3>
						            </div>
						            <div class="box-body chat" id="">
						            	<table id="sliderDetailsmy" class="table table-bordered table-striped">
								            <thead>
								              <tr>
								                <th>Sl No#</th>
								                <th>App No</th>
								                <th>Name</th>
								                 <th>Designation</th>
								                <th>Action Date</th>
								              </tr>
								            </thead>
								            <tbody>
							            	 	<?php foreach($MyApplication_List as $i=> $event): ?>
								                <tr>
								                  <td><?=$i+1?></td>
								                   <td> 
								                   	<a href="#" onclick="releaseAppliction('<?php echo $event['Application_Number'];?>')"><i class="fa fa-times text-danger"></i></a>
								                   	<a href="#" onclick="ApplicationAction('open','<?php echo $event['Application_Number'];?>')"><?php echo $event['Application_Number'];?></a> </td>
								                  <td> <?php echo $event['Full_Name'];?> </td>
								                  <td> <?php echo $event['Designaiton'];?> </td>
								                  <td> <?php echo $event['Application_Date'];?> </td>
								              	</tr>
								               	<?php endforeach; ?>
								            </tbody>
								        </table>
						            </div>
						        </div>
						        <ul>
						        	 <?php foreach($reject_Application_List as $i=> $event): ?>
						        	 	<li> Your applicaiton (<a href="#" onclick="openapplicitonresubmit('<?php echo $event['Application_Number'];?>')"><?php echo $event['Application_Number'];?></a>) has rejected. Please click on applicaiton number to proceed further action</li>
					        	<?php endforeach; ?>
						        </ul>
						       
						        
					        </form>	
					        </section>
					        <section class="col-lg-6 connectedSortable">
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
<script type="text/javascript">
	$(function () {
      $('#sliderDetails').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
      $('#sliderDetailsmy').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
      
    });
	function ApplicationAction(type,appNO){
		$('#AppNumber').val(appNO);
       	$.blockUI
        ({ 
          css: 
          { 
                border: 'none', 
                padding: '15px', 
                backgroundColor: '#000', 
                '-webkit-border-radius': '10px', 
                '-moz-border-radius': '10px', 
                opacity: .5, 
                color: '#fff' 
          } 
        });
      	var url='<?php echo base_url();?>index.php?adminController/claimopenapp/'+type;
      	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#groupId").serialize()}; 
      	$("#groupId").ajaxSubmit(options);
	    setTimeout($.unblockUI, 600);
	}
	function releaseAppliction(AppNo){
		$('#AppNumber').val(AppNo);
       	$.blockUI
        ({ 
          css: 
          { 
                border: 'none', 
                padding: '15px', 
                backgroundColor: '#000', 
                '-webkit-border-radius': '10px', 
                '-moz-border-radius': '10px', 
                opacity: .5, 
                color: '#fff' 
          } 
        });
      	var url='<?php echo base_url();?>index.php?adminController/release/';
      	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#groupId").serialize()}; 
      	$("#groupId").ajaxSubmit(options);
	    setTimeout($.unblockUI, 600);
	}
	function openapplicitonresubmit(appno){
		$('#AppNumber').val(appno);
		$.blockUI
	        ({ 
	          css: 
	          { 
	                border: 'none', 
	                padding: '15px', 
	                backgroundColor: '#000', 
	                '-webkit-border-radius': '10px', 
	                '-moz-border-radius': '10px', 
	                opacity: .5, 
	                color: '#fff' 
	          } 
	        });
      	var url='<?php echo base_url();?>index.php?adminController/opentoresubmit/'+appno;
       	var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#groupId").serialize()}; 
      	$("#groupId").ajaxSubmit(options);
	    setTimeout($.unblockUI, 600);
	}
</script>

