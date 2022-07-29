<?php 
$records = getBookingRecords();
$utype = '';
$type = $_SESSION['calendar_fd_user']['type'];
if($type == 'admin') {
	$utype = 'on';
}
?>

<div class="col-md-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Event Booking Details</h3>
	     <button class="btn btn-primary" id="download" style="float:right;"> Download pdf</button>
    </div>
    <!-- /.box-header -->
    <div class="box-body" id="invoice">
      <table class="table table-bordered">
        <tr>
          <th style="width: 10px">#</th>
          <th>Name</th>
		   <th>ID</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Event Date</th>
         <th style="width: 140px">Event Name</th>
		  <th style="width: 140px">Event Reason</th>
          <th style="width: 100px">Status</th>
          <?php if($utype == 'on') { ?>
		  <th >Action</th>
		  <?php } ?>
        </tr>
        <?php
	  $idx = 1;
	  foreach($records as $rec) {
	  	extract($rec);
		$stat = '';
		if($status == "PENDING") {$stat = 'warning';}
		else if ($status == "APPROVED") {$stat = 'success';}
		else if($status == "DENIED") {$stat = 'danger';}
		?>
        <tr>
          <td><?php echo $idx++; ?></td>
          <td><a href="<?php echo WEB_ROOT; ?>views/?v=USER&ID=<?php echo $user_id; ?>"><?php echo strtoupper($user_name); ?></a></td>
           <td><?php echo $rid; ?></td>
		  <td><?php echo $email; ?></td>
          <td><?php echo $phone; ?></td>
          <td><?php echo $res_date; ?></td>
		  <td><?php echo $ename; ?></td>
		   <td><?php echo $eres; ?></td>
		  
          <td><span class="label label-<?php echo $stat; ?>"><?php echo $status; ?></span></td>
          <?php if($utype == 'on') { ?>
		  <td><?php if($status == "PENDING") {?>
            <a href="javascript:approve('<?php echo  $rid;?>','<?php echo $user_name ?>','<?php echo $email ?>');">Approve</a>&nbsp;/
			&nbsp;<a href="javascript:decline('<?php echo  $rid;?>','<?php echo $user_name ?>','<?php echo $email ?>');">Denied</a>&nbsp;/
			&nbsp;<a href="javascript:deleteUser('<?php echo $rid ?>');">Delete</a>
            <?php } else { ?>
			<a href="javascript:deleteUser('<?php echo $user_id ?>');">Delete</a>
			<?php }//else ?>
          </td>
		  <?php } ?>
        </tr>
        <?php } ?>
      </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
      <!--
	<ul class="pagination pagination-sm no-margin pull-right">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
	-->
      <?php echo generatePagination(); ?> </div>
  </div>
  <!-- /.box -->
</div>
<script language="text/javascript">
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'Event Details.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>


<script language="javascript">
function approve(rid,uname,uemail) {
	if(confirm('Are you sure you wants to Approve it ?')) {
		window.location.href = '<?php echo WEB_ROOT; ?>api/process.php?cmd=regConfirm&action=approve&userId='+rid+'&uname='+uname+'&uemail='+uemail;
	}
}
function decline(rid,uname,uemail) {
	if(confirm('Are you sure you wants to Decline the Booking ?')) {
		window.location.href = '<?php echo WEB_ROOT; ?>api/process.php?cmd=regConfirm&action=denide&userId='+rid+'&uname='+uname+'&uemail='+uemail;
	}
}
function deleteUser(rid) {
	if(confirm('Deleting user will also delete it\'s booking from calendar.\n\nAre you sure you want to priceed ?')) {
		window.location.href = '<?php echo WEB_ROOT; ?>api/process.php?cmd=delete&userId='+rid;
	}
}

</script>
