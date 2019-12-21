<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview" id="dashboardId">
        <a href="<?php echo base_url();?>index.php?baseController/dashboard">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <?php if($this->session->userdata('Role_Id')=="1"){?>
      	 <li class="treeview" id="role">
	        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/role/')">
	          <i class="fa fa-laptop"></i>
	          <span>Update Staff Detail</span>
	        </a>
	      </li>
      	<li class="treeview" id="contact">
	        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/companyName/')">
	          <i class="fa fa-laptop"></i>
	          <span>Update Company</span>
	        </a>
	      </li>
	      <li class="treeview" id="contact">
	        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/department/')">
	          <i class="fa fa-laptop"></i>
	          <span>Update Department</span>
	        </a>
	      </li>
	      <li class="treeview" id="contact">
	        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadPage/designation/')">
	          <i class="fa fa-laptop"></i>
	          <span>Update Designation</span>
	        </a>
	      </li>
	     
   		<?php }?>
    </ul>
  </section>
</aside>