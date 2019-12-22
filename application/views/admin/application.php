<section class="content-header">
  	<h1>
	    Home
	    <small>Application</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Create Application</h3>
	    </div>
	    <div class="box-body">
	    	<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'applicationform'));?>
	    	<input type="hidden" name="appNo" value="<?=$Registration_number?>">
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
		              		 	<label><?=$Registration_number?></label>
			              	</div>
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label class="pull-right">Application Date : <span id="currentDate"></span></label>
			              	</div>
			          	</div>
			          	<hr>
		          		<div class="form-group">
			              	<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
			              		<label>Subject: </label>
			              	</div>
			              	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">	
			              		<input type="text" name="Subject" id="Subject" class="form-control">
			              		<span id="Subject_err" class="text-danger"></span>
			              	</div>
			            </div>

			            <div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			              		<label>Details: </label>
			              		<textarea class="form-control summernote" name="application_details"></textarea>
			              	</div>
		              	</div>

		              	<div class="form-group">
			              	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			              		<label><?= $this->session->userdata('Full_Name') ?></label><br />
			              		<label><?= $this->db->get_where('designation_tbl',array('Id'=>$this->session->userdata('DesignationId')))->row()->Designaiton ?></label>
			              	</div>
			              	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">	
			              		<label>Select to whom you whish to forward your request</label><br />
			              		<?php   foreach($VerifierList as $i=> $com): ?>
				              		<input type="checkbox" name="nameverifier[]" id="nameverifier<?=$i?>" value="<?php echo$com['Id'];?>">  <?php echo$com['Full_Name'];?> (<?php echo$com['Email_Id'];?>) <br/>
			              		<?php  endforeach;  ?>
			              	</div>
			              	
			            </div>
			          	
			          	<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			              		<button type="button" onclick="submitDetails()" class="btn btn-primary pull-right"><span class="fa fa-edit"></span> Submit</button>
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
	var today = new Date();
	var date = today.getDate()+'/'+(today.getMonth()+1)+''+today.getFullYear();
	$('#currentDate').html(date);
	function submitDetails(){
		if(validateForm()){
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
	      var url='<?php echo base_url();?>index.php?adminController/submitApplcationDetails/';
	      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#applicationform").serialize()}; 
	      $("#applicationform").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600);
		}
	}
	function validateForm(){
		var rettype=true;
		if($('#Subject').val()==""){
			$('#Subject_err').html('Please mention subject');
			rettype=false;
		}
		return rettype;
	}
</script>
