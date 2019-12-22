<section class="content-header">
  	<h1>
	    Home
	    <small>Application</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Application Verification and Approval</h3>
	    </div>
	    <div class="box-body">
	    	<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'applicationform'));?>
	    	<input type="hidden" name="appNo" value="<?=$application_detail->Application_Number?>">
	      		<div class="row">
		          	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	          		 	<div class="form-group">
	          		 		
			              	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
		              		 	<img src="<?php echo base_url();?>uploads/logo.png" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="30%" align="left">
			              	</div>
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<h1><b><?= $this->db->get_where('company_tbl',array('Id'=>$this->session->userdata('companyId')))->row()->Company_Name ?></b></h1>
			              	</div>
			          	</div>
			          	<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label><?=$application_detail->Application_Number?></label>
			              	</div>
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label class="pull-right">Submitted Date : <?=$application_detail->Application_Date?></label>
			              	</div>
			          	</div>
			          	<hr>
		          		<div class="form-group">
			              	<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
			              		<label>Subject: </label>
			              	</div>
			              	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">	
			              		<input type="text" name="Subject" id="Subject" class="form-control" value="<?=$application_detail->Subject?>" readonly>
			              	</div>
			            </div>

			            <div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			              		<label>Details: </label>
			              		<textarea class="form-control summernote" name="application_details"><?=$application_detail->Message?></textarea>
			              	</div>
		              	</div>
		              	<div class="form-group">
			              	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			              		<label><?=$application_detail->Full_Name?></label><br />
			              		<label><?= $this->db->get_where('designation_tbl',array('Id'=>$application_detail->Designation_Id))->row()->Designaiton ?></label>
			              	</div>
			            </div>
			            <?php if($application_detail->Remarks!=""){?>
			            	<div class="form-group">
				              	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				              		<label>Previous Remarks</label>
				              		<textarea class="form-control" readonly="" id="remarksprovided"><?=$application_detail->Remarks?></textarea>
				              	</div>
			              	</div>
			        	<?php } ?>
			            <div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			              		<label>Remarks</label>
			              		<textarea class="form-control" onclick="removerErr('remarks_err')" name="remarks" id="remarks"></textarea>
			              		<span id="remarks_err" class="text-danger"></span>	
			              	</div>
			              </div>
			              <?php if($this->session->userdata('Role_Id')=="2"){?>
			              	<!-- <div class="form-group">
				              	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
				              		<label>Amount to be Approve</label><br />
				              		<input type="number" name="finalAmt" class="form-control" id="finalAmt">
				              	</div>
				            </div> -->
		              	
			        	<?php }else{ ?>
			        		<div class="form-group">
				              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
				              		<label>Select to whom you whish to forward application</label><br />
				              		<select name="nameverifier" id="nameverifier" onclick="removerErr('nameverifier_err')" class="form-control">
				              			<option value="">--Select--</option>
				              			<?php   foreach($VerifierList as $i=> $com): ?>
					              		<option value="<?php echo$com['Id'];?>,<?php echo$com['Role_Id'];?>"><?php echo$com['Full_Name'];?> (<?php echo$com['Email_Id'];?>)</option>
				              		<?php  endforeach;  ?>
				              		</select>
				              		<span id="nameverifier_err" class="text-danger"></span>
				              	</div>
				            </div>
			            <?php } ?>	
			          	
			          	<div class="form-group pull-right">
			              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			              		<?php if($this->session->userdata('Role_Id')=="2"){?>
			              			<button type="button" onclick="verifydetils('approvefinal')" class="btn btn-primary "><span class="fa fa-check"></span> Approve</button>
			              		<?php }else{ ?>
			              			<button type="button" onclick="verifydetils('approve')" class="btn btn-primary "><span class="fa fa-check"></span> Forward</button>
			              		<?php } ?>	
			              		
			              		<button type="button" onclick="verifydetils('reject')" class="btn btn-warning "><span class="fa fa-times"></span> Reject</button>
			              	</div>
		              	</div>
		          	</div>
		      	</div>
			</form>
	    </div>
	</div>
</section>
<script type="text/javascript">
 	$('.summernote').summernote({
      height:300
  	});
	 function verifydetils(type){
	 	if(validateemarks(type)){
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
	      var url='<?php echo base_url();?>index.php?adminController/updateApplicationDetails/'+type;
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#applicationform").serialize()}; 
	      $("#applicationform").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600); 
	 	}
	 }
	 function validateemarks(type){
	 	var retval=true;
	 	if(type=="reject" && $('#remarks').val()==""){
	 		$('#remarks_err').html('Please mention the reason to reject');
	 		retval=false;
	 	}
	 	if(type=="approve" && $('#nameverifier').val()==""){
	 		$('#nameverifier_err').html('Please select person whom you wish to forward');
	 		retval=false;
	 	}
	 	return retval;
	 }
	 function removerErr(errId){
	 	$('#'+errId).html('');
	 }
	
</script>
