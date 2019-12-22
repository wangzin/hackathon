<section class="content-header">
  	<h1>
	    Home
	    <small>Designation Details</small>
  	</h1>
</section>
<section class="content">
  	<div class="box box-primary">
	    <div class="box-header with-border">
	      <h3 class="box-title">Manage Designation Details</h3>
	    </div>
	    <button type="button" class="btn btn-primary pull-right" onclick="showaddDesignation()"> Add new</button>
	    <div class="box-body">
	    	<div class="row">
	        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        		<table id="sliderDetails" class="table table-bordered table-striped">
			            <thead>
			              <tr>
			                <th>Sl No#</th>
			                <th>Designation</th>
                      <th>Action</th>
			              </tr>
			            </thead>
			            <tbody>
		            	 	<?php foreach($designationList as $i=> $event): ?>
			               <tr>
                        <td><?=$i+1?></td>
                        <td> <?php echo $event['Designaiton'];?> </td>
                                          <td>
                           <button type="button" class="btn btn-info btn-block" onclick="showrole('<?php echo $event['Id']?>','<?php echo $event['Designaiton']?>')"><i class="fa fa-edit"></i>Update</button>
                           <button type="button" class="btn btn-danger btn-block" onclick="deletedesignation('<?php echo $event['Id']?>')"><i class="fa fa-times"></i>Delete</button>
                        </td>
                      </tr>
			               	<?php endforeach; ?>
			            </tbody>
			        </table>
			    </div>
			</div>
		</div>
	</div>
</section>
<div class="modal modal-default" id="deleteSlider">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Update Designation</h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'designationupdate', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                  	<input type="text" name="designationName" id="designationName" class="form-control">
				                </div>
				                
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<input type="hidden" name="deleteId" id="deleteId">
				                	<button class="btn btn-success" type="button" onclick="updatedesignationdetails()"> <i class="fa fa-check"></i>Update</button>
				                </div>
				            </div>
			            </div>
			        </div>
      			</form>
      		</div>
      	</div>
  	</div>
</div>

<div class="modal modal-default" id="adddesignationid">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Add Designation</h4>
      		</div>
      		<div class="modal-body">
      			<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'adddesignation', 'enctype' => 'multipart/form-data'));?>
  				 	<div class="row">
			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			            	<div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                  	<input type="text" name="designationName" id="designationName" class="form-control">
				                </div>
				            </div>
				            <div class="form-group">
				                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				                	<button class="btn btn-success" type="button" onclick="adddesignationdetails()"> <i class="fa fa-check"></i>Add</button>
				                </div>
				            </div>
			            </div>
			        </div>
      			</form>
      		</div>
      	</div>
  	</div>
</div>

<script type="text/javascript">
	$('.summernote').summernote({
      height:250
  	});
	$(function () {
      $('#sliderDetails').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
    });
	
 	function showrole(id,name){
 		$('#designationName').val(name);
 	 		$('#deleteId').val(id);
  		$('#deleteSlider').modal('show');
 	}
  	
  	function deletedesignation(id){
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
	      var url='<?php echo base_url();?>index.php?adminController/deletedesignation/'+id+'/designation';
	       $("#mainContentdiv").load(url);
	       setTimeout($.unblockUI, 1000);
  	}
  	
  	function updatedesignationdetails(){
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
      var url='<?php echo base_url();?>index.php?adminController/Updatedesignation/designation';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#designationupdate").serialize()}; 
      $("#designationupdate").ajaxSubmit(options);
      $('#deleteSlider').modal('hide');
      setTimeout($.unblockUI, 600); 
  	}
  	function showaddDesignation(){
  		
  		$('#adddesignationid').modal('show');
  	}
  	function adddesignationdetails(){
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
      var url='<?php echo base_url();?>index.php?adminController/adddesignation/designation';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#adddesignation").serialize()}; 
      $("#adddesignation").ajaxSubmit(options);
      $('#adddesignationid').modal('hide');
      setTimeout($.unblockUI, 600);
  	}
 
</script>
  	
