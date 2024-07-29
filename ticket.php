<?php 
include 'init.php'; 
if(!$users->isLoggedIn()) {
	header("Location: login.php");	
}
include('inc/header.php');
$user = $users->getUserInfo();
?>
<title>IRCON Helpdesk System </title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/general.js"></script>
<script src="js/tickets.js"></script>
<link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
<div class="container">	
<div class="img" >     
	 <img src="css/logo.png" alt="loading">
	</div>
	<div class="row home-sections">
	<h2>Ticketing Tool</h2>	
	<?php include('menus.php'); ?>		
	</div> 
	<div class="">   		
		<h3>View and manage tickets that may have responses from support team.</h3>	

		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				<div class="col-md-2" align="right">
					<button type="button" name="add" id="createTicket" class="btn btn-success btn-xs">Create Ticket</button><br><br>
					<?php if(isset($_SESSION["admin"])) { ?>
				            <!-- <li id="department"><a href="department.php" >Department</a></li>
				            <li id="user"><a href="user.php" >Users</a></li> -->
							<button type="button" name="download" id="downloadTickets" class="btn btn-success btn-xs" onclick="window.location.href='export_tickets.php'">Download Tickets</button>				
			<?php } ?>	
					
				</div>
			</div>
		</div>
		<table id="listTickets" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>S/N</th>
					<th>Ticket ID</th>
					<th>Subject</th>
					<th>Department</th>
					<th>Created By</th>					
					<th>Created</th>	
					<th>Status</th>
					<th>View Ticket</th>
					<th>Edit</th>
				
					<th>Delete</th>					
				</tr>
			</thead>
		</table>
	</div>
	<?php include('add_ticket_model.php'); ?>
</div>	
<?php include('inc/footer.php');?>