<div class="box box-warning">
    <div class="box-header">
      <i class="fa fa-desktop"></i>
      <h3 class="box-title">Search Result</h3>
    </div>
    <div class="box-body chat" id="">
    	<table id="sliderDetailsmy" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl No#</th>
                <th>App No</th>
                <th>Subject</th>
                 <th>Approve Date</th>
              </tr>
            </thead>
            <tbody>
        	 	<?php foreach($result_list as $i=> $event): ?>
                <tr>
                  <td><?=$i+1?></td>
                   <td> 
                   	<a href="#" onclick="ApplicationActionDetils('<?php echo $event['Id'];?>')"><?php echo $event['Application_Number'];?></a> </td>
                  <td> <?php echo $event['Subject'];?> </td>
                  <td> <?php echo $event['Application_Date'];?> </td>
              	</tr>
               	<?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
