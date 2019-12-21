<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/header.php');
?> 
<body>
    <?php
        $this->load->view('web/nevagation.php');
    ?> 
    <div id="mainpublicContent">
     	
    	<main class="container">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-8">
            <h4 style="text-align:center">Contact Us</h4>

         
            <article><form action="email.php" method="post" role="form">
               <fieldset>
                            <legend>24/7 support - Connect with Us will give you best solutions.</legend>
                            <div class="form-group">
                                <label for="InputName">Your name</label>
                              <input type="text"  name="name" class="form-control"  required="">
                            </div>

                            <div class="form-group">
                                <label for="InputEmail">Email address</label>
                                <input type="email" name="email" class="form-control"  required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label for="InputMessage">Message</label>
                                 <textarea name="Message" class="form-control" rows="5" required=""></textarea>
                            </div>
                   
                            <button type="submit" class="btn btn-primary" name="submit" value="send"> Submit</button>
                        </fieldset>
                </form>
            </article>

        </div>
    </div>
	<?php
	    $this->load->view('web/footer.php');
	?>
	
</body>
 
