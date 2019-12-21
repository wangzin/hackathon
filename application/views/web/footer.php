<footer class="footer-area section-padding-80-0">
    <div class="main-footer-area">
        <div class="container">
            <div class="row align-items-baseline justify-content-between">
                <div class="col-12 col-md-8">
                    <div class="copywrite-text">
                        <p class="mb-20">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank"><?=$generalinfo->Site_Name;?></a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="social-info">
                         <a href="<?php echo base_url()?>index.php?adminController/logout" class="btn btn-primary mb-20 pull-right" target="_blank"><span class="fa fa-laptop"></span>Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo base_url();?>/assest/website/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assest/website/js/popper.min.js"></script>
<script src="<?php echo base_url();?>/assest/website/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assest/website/js/roberto.bundle.js"></script>
<script src="<?php echo base_url();?>/assest/website/js/default-assets/active.js"></script>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
<script type="text/javascript">
    function loadpage(url){
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
      $("#mainpublicContent").load(url);
      setTimeout($.unblockUI, 1000); 
    }
	function sendMessage(formId){
        if(validatemessage()){
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
          var url='<?php echo base_url();?>index.php?websiteController/sendMessage/';
          var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#"+formId).serialize()}; 
          $("#"+formId).ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
        }
    }
    function validatemessage(){
        var returnval=true;
        if($('#Sender_Name').val()==""){
            $('#Sender_Name_err').html('Please  mention your name');
            returnval=false;
        }
        if($('#Sender_Email').val()==""){
            $('#Sender_Email_err').html('Please  mention your email');
            returnval=false;
        }
        if($('#Subject').val()==""){
            $('#Subject_err').html('Please  mention subject');
            returnval=false;
        }
        if($('#Message').val()==""){
            $('#Message_err').html('Please  mention Message');
            returnval=false;
        }
        return returnval;
    }
    
</script>