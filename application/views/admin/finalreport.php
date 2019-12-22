<div class="box box-warning">
    <div class="box-header">
      <i class="fa fa-desktop"></i>
      <h3 class="box-title">Search Result</h3>
    </div>
    <div class="box-body chat" id="printdiv">
    	 <div class="row" >
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                  <img src="<?php echo base_url();?>uploads/logo.png" alt="no imaged" onerror="this.src='<?php echo base_url();?>uploads/user.png'" width="30%" align="left">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <h1><b><?= $this->db->get_where('company_tbl',array('Id'=>$this->session->userdata('companyId')))->row()->Company_Name ?></b></h1>
                </div>
            </div>
          </div></div>
            <hr />
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <label><?=$application_detail->Application_Number?></label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <label class="pull-right">Approved Date : <?=$application_detail->Application_Date?></label>
                </div>
            </div>         
            
            <div class="form-group">
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                  <label>Subject: </label>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">  
                  <?=$application_detail->Subject?>
                </div>
            </div>
            <br />

            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?=$application_detail->Message?>
              </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <label><?=$application_detail->Full_Name?></label><br />
                  <label><?= $application_detail->Designaiton ?></label>
                </div>
            </div>           
        </div>
       <div class="form-group pull-right">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <button type="button" onclick="printAndDowoload('<?=$application_detail->Application_Number?>')" class="btn btn-warning "><span class="fa fa-download"></span> Print</button>
                </div>
              </div>
          </div>
    </div>
</div>
<script type="text/javascript">
   var pdf = new jsPDF('p', 'pt', 'letter'),
    pdfConf = {
        pagesplit: false,
        imageSmoothingEnabled:false,
        mozImageSmoothingEnabled:false,
        oImageSmoothingEnabled:false,
        webkitImageSmoothingEnabled:false,
        msImageSmoothingEnabled:false,
        scale:2,
        background: '#fff',
        jsPDF: {unit: 'in', format: 'a4', orientation: 'l'}
    };
  function printAndDowoload(appNo){
     /*var pdf = new jsPDF('p', 'pt', 'a4');
      pdf.setFontSize(40)
      pdf.addHTML($('#printdiv')[0],pdfConf, function() {
          pdf.save(appNo+'.pdf');
          alert();
       });*/

       var printContents = document.getElementById('printdiv').innerHTML;
       var originalContents = document.body.innerHTML;

       document.body.innerHTML = printContents;

       window.print();
  }
     
</script>

