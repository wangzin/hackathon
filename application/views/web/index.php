<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/header.php');
?> 
<body>
    <?php
        $this->load->view('web/nevagation.php');
    ?> 
    <div id="mainpublicContent">
     	
    	<div class="register">
		<div class="container">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 w3layouts_register_right page-header">
				<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'registrationform'));?>
					<span class="text-center"><h2> Get Registered</h2></span>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							
							<input name="Name" id="Name" placeholder="Full Name" onclick="removeerr('name_err')" class="pager form-control" type="text">
							<span id="name_err" class="text-justify"></span>
							
							<input name="email" id="email" onclick="removeerr('email_err')" placeholder="Email Id" class="pager form-control" type="text" >
							<span id="email_err" class="text-justify"></span>
							
							<input name="contact" id="contact" onclick="removeerr('contact_err')" placeholder="Mobile Phone No" class="pager form-control" type="number">
							<span id="contact_err" class="text-justify"></span>
							
							<input name="text" placeholder="Password" id="Password" onclick="removeerr('Password_err')" class="pager form-control" type="text">
							<span id="Password_err" class="text-justify"></span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<span id="Company_Name_err" class="text-justify"></span>
							<select class="form-control pager" onclick="removeerr('Company_Name_err')" name="Company_Name" id="Company_Name">
								<option value=""> Company Name</option>
								<?php  
				                  	foreach($companyList as $i=> $com):
				              	?>
				              	<option value="<?php echo$com['Id'];?>"> <?php echo$com['Company_Name'];?></option>
			              		<?php 

				                  endforeach; 
				              	?>
							</select>
							<span id="department_err" class="text-justify"></span>
							<select class="form-control pager" onclick="removeerr('department_err')" name="department" id="department">
								<option value=""> Department Name</option>
								<?php  
				                  	foreach($departmentList as $i=> $cat):
				              	?>
				              	<option value="<?php echo$cat['Id'];?>"> <?php echo$cat['Department'];?></option>
			              		<?php 

				                  endforeach; 
				              	?>
							</select>
							<span id="designation_err" class="text-justify"></span>
							<select class="form-control pager" onclick="removeerr('designation_err')" name="designation" id="designation">
								<option value=""> Designation</option>
								<?php  
				                  	foreach($designationList as $i=> $cat):
				              	?>
				              	<option value="<?php echo$cat['Id'];?>"> <?php echo$cat['Designaiton'];?></option>
			              		<?php 

				                  endforeach; 
				              	?>
							</select>
						</div>
					</div>
					<button type="button" onclick="register()" class="btn btn-warning btn btn-block">Sign Up </button>
				</form>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 w3layouts_register_left">
				<p>Login</p>
				<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'loginform'));?>
				<span id="EmailId_err" class="text-danger"></span>
				<input name="EmailId" id="EmailId" onclick="removeerr('EmailId_err')" placeholder="Email Id" type="text" class="form-control"><br />
				<span id="password_err" class="text-danger"></span>
				<input name="password" id="password" onclick="removeerr('password_err')" placeholder="Password" type="password" class="form-control"><br>
				<button type="button" onclick="user_login()" class="btn btn-info"> Login </button>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
    </div>
	<?php
	    $this->load->view('web/footer.php');
	?>
	
</body>
<script type="text/javascript">
	function register(){
		if(validateform()){
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
	          var url='<?php echo base_url();?>index.php?baseController/registerDetails/';
	          var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#registrationform").serialize()}; 
	          $("#registrationform").ajaxSubmit(options);
	          setTimeout($.unblockUI, 600); 
		}
	}
	function validateform(){
		var returntype=true;
		if($('#Name').val()==""){
			$('#name_err').html('Name is required');	
			returntype=false;
		}
		if($('#email').val()==""){
			$('#email_err').html('email is required');	
			returntype=false;
		}
		if($('#contact').val()==""){
			$('#contact_err').html('contact is required');	
			returntype=false;
		}
		if($('#Password').val()==""){
			$('#Password_err').html('Password is required');	
			returntype=false;
		}
		if($('#Company_Name').val()==""){
			$('#Company_Name_err').html('Company Name is required');	
			returntype=false;
		}
		if($('#department').val()==""){
			$('#department_err').html('Department is required');	
			returntype=false;
		}
		if($('#designation').val()==""){
			$('#designation_err').html('designation is required');	
			returntype=false;
		}
		return returntype;
	}
	function removeerr(errid){
		$('#'+errid).html('');	
	}
	function user_login(){
		if(validateloginform()){
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
	          var url='<?php echo base_url();?>index.php?baseController/registerDetails/';
	          var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#loginform").serialize()}; 
	          $("#loginform").ajaxSubmit(options);
	          setTimeout($.unblockUI, 600); 
		}
	}
	function validateloginform(){
		var retuva=true;
		if($('#EmailId').val()==""){
			$('#EmailId_err').html('password is required');	
			retuva=false;
		}
		if($('#password').val()==""){
			$('#password_err').html('password is required');	
			retuva=false;
		}
		return retuva;
	}
</script>
 
