<section class="content-header">
  	<h1>
	    Home
	    <small>Search Details</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Search and print</h3>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'searchform'));?>
		        		<div class="form-group">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		              		 	<label>Letter No:</label> <input type="text" name="letterNo" id="letterNo" class="form-control">
			              	</div>
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			              		<label>Select User:</label>
			              		<select name="userid" id="userid" class="form-control">
			              			<option value="">--Select--</option>
			              			<?php   foreach($userList as $i=> $com): ?>
				              		<option value="<?php echo$com['Id'];?>"><?php echo$com['Full_Name'];?> (<?php echo$com['Email_Id'];?>)</option>
			              		<?php  endforeach;  ?>
			              		</select>
			              	</div>
			          	</div>
			          	<div class="form-group pagination">
			              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			              		<button class="btn btn-primary" type="button" onclick="getDetails()"> Search Details</button>
			              	</div>
			            </div>
		            </form>	
		          	<hr>
		          	<div id="loadSearchDetails"></div>
	        	</div>
	        </div>
	    </div>
	</div>
</section>
<script type="text/javascript">
	function getDetails(){
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
	      var url='<?php echo base_url();?>index.php?adminController/searchDetails/';
	      var options = {target: '#loadSearchDetails',url:url,type:'POST',data: $("#searchform").serialize()}; 
	      $("#searchform").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600);
	}
	function ApplicationActionDetils(id){
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
	      var url='<?php echo base_url();?>index.php?adminController/searchDetailsgenerate/'+id;
	      var options = {target: '#loadSearchDetails',url:url,type:'POST',data: $("#searchform").serialize()}; 
	      $("#searchform").ajaxSubmit(options);
	      setTimeout($.unblockUI, 600);
	}
</script>
