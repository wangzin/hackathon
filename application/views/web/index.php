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
				<form action="#" method="post">	
					<h3 class="fa fa-angle-double-right">Sign Up</h3>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<input name="Name" placeholder="Full Name" class="pager form-control" type="text" required="" onfocus="this.placeholder = ''"
							onblur="this.placeholder = 'Full Name'">
							<input name="email" placeholder="Email Id" class="pager form-control" type="text" required="" onfocus="this.placeholder = ''"
							onblur="this.placeholder = 'Email'">
							<input name="contact" placeholder="Mobile Phone No" class="pager form-control" type="number" onfocus="this.placeholder = ''"
							onblur="this.placeholder = 'Phone No'">
							<input name="text" placeholder="Password" class="pager form-control" type="text" onfocus="this.placeholder = ''"
							onblur="this.placeholder = 'Password'">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<select class="form-control pager">
								<option value=""> Company Name</option>
							</select>
							<select class="form-control pager">
								<option value=""> Department Name</option>
							</select>
							<select class="form-control pager">
								<option value=""> Designation</option>
							</select>
						</div>
					</div>
					
					<input type="submit" value="Book Now">
				</form>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 w3layouts_register_left page-header">
				<p>Login</p>
				<input name="Name" placeholder="User Name" type="text" class="form-control" onfocus="this.placeholder = ''"
					onblur="this.placeholder = 'User Name'"><br />
				<input name="Name" placeholder="Password" type="password" class="form-control"onfocus="this.placeholder = ''"
					onblur="this.placeholder = 'password'"><br />
				<button type="button" class="btn btn-info"> Login </button>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
    </div>
	<?php
	    $this->load->view('web/footer.php');
	?>
	
</body>
 
