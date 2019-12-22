<section class="content-header">
  	<h1>
	    Home
	    <small>Application</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Application Details</h3>
	    </div>
	    <div class="box-body">
	    	<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'applicationform'));?>
	    	<input type="hidden" name="appNo" value="<?=$application_detail->Application_Number?>">
	    	<input type="hidden" name="userId" value="<?=$application_detail->User_IdTochagsfa?>">
	      		<div class="row" id="printdiv">
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
		              		 	<label class="pull-right">Approved Date : <?=$application_detail->Application_Date?></label>
			              	</div>
			          	</div>
			          	<hr>
		          		<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			              		<label>Subject: <?=$application_detail->Subject?></label>
			              	</div>
			              	
			            </div>

			            <div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			              		<?=$application_detail->Message?>
			              	</div>
		              	</div>
		              	<div class="form-group">
			              	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			              		<label><?=$application_detail->Full_Name?></label><br />
			              		<label><?= $this->db->get_where('designation_tbl',array('Id'=>$application_detail->Designation_Id))->row()->Designaiton ?></label>
			              	</div>
			            </div>
			            <div class="form-group">
			              	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			              		<label>Applicaiton approved Id:<?=$application_detail->Id?></label><br />
			              	</div>
			              </div>
			                
			          	
			          	<!-- <div class="form-group pull-right">
			              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			              		<button type="button" onclick="verifydetils('resubmit')" class="btn btn-primary "><span class="fa fa-check"></span> Submit</button>
			              	</div>
		              	</div> -->
		          	</div>
		      	</div>
		      	<div class="form-group pull-right">
	                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                  <button type="button" onclick="printAndDowoload('<?=$application_detail->Application_Number?>')" class="btn btn-warning "><span class="fa fa-download"></span> Print</button>
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
	function printAndDowoload(appNo){
       var printContents = document.getElementById('printdiv').innerHTML;
       var originalContents = document.body.innerHTML;

       document.body.innerHTML = printContents;

       window.print();
  }
     
</script>
