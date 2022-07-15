<?php 
  require 'include/header.php';
  ?>


  <body data-col="2-columns" class=" 2-columns ">
      <div class="layer"></div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      <!-- main menu-->
      <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
      <?php include('main.php'); ?>
      <!-- Navbar (Header) Ends-->

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper"><!--Statistics cards Starts-->
<?php if(isset($_GET['edit'])) {
$sels = $con->query("select * from timeslot where id=".$_GET['edit']."")->fetch_assoc();
?>
<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Edit Time Sloat</h4>
					
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="form-body">
								

								

								<div class="form-group">
									<label for="cname">Time Sloat Min Time</label>
									<input type="time" id="mintime" value="<?php echo $sels['mintime'];?>" class="form-control"  name="mintime" required >
								</div>
								<div class="form-group">
									<label for="cname">Time Sloat Max Time</label>
									<input type="time" id="mintime" value="<?php echo $sels['maxtime'];?>" class="form-control"  name="maxtime" required >
								</div>

								

							
							

							<div class="form-actions">
								
								<button type="submit" name="up_cat" class="btn btn-raised btn-raised btn-primary">
									<i class="fa fa-check-square-o"></i> Update Timesloat
								</button>
							</div>
							
							<?php 
							if(isset($_POST['up_cat'])){
							$mintime = mysqli_real_escape_string($con,$_POST['mintime']);
							$maxtime = $_POST['maxtime'];
							
   $con->query("update timeslot set mintime='".$mintime."',maxtime='".$maxtime."' where id=".$_GET['edit']."");
?>
						
							 <script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 4500; // 1.5s

    toastr.info('Timesloat Update Successfully!!');
	setTimeout(function()
	{
		window.location.href="timesloat.php";
	},1500);
    
  });
  </script>
  <?php
							}
							?>
						</form>
					</div>
				</div>
			</div>
		</div>

		
	</div>
<?php } else { ?>
<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Add Timesloat</h4>
					
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="form-body">
								

								

								<div class="form-group">
									<label for="cname">Min Time Sloat</label>
									<input type="time" id="mintime" class="form-control"  name="mintime" required >
								</div>
								
								<div class="form-group">
									<label for="cname">Max Time Sloat</label>
									<input type="time" id="maxtime" class="form-control"  name="maxtime" required >
								</div>

									


							

								
							</div>

							<div class="form-actions">
								
								<button type="submit" name="sub_cat" class="btn btn-raised btn-raised btn-primary">
									<i class="fa fa-check-square-o"></i> Save Time Sloat
								</button>
							</div>
							
							<?php 
							if(isset($_POST['sub_cat'])){
							$mintime = mysqli_real_escape_string($con,$_POST['mintime']);
							
							$maxtime = mysqli_real_escape_string($con,$_POST['maxtime']);
							
$con->query("insert into timeslot(`mintime`,`maxtime`)values('".$mintime."','".$maxtime."')");

?>
						
							 <script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 4500; // 1.5s
    toastr.info('Insert Timesloat Successfully!!');
   
  });
  </script>
  <?php 
							}
							?>
						</form>
					</div>
				</div>
			</div>
		</div>

		
	</div>
	<?php } ?>





          </div>
        </div>

        

      </div>
    </div>
    
   <?php 
 
<script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>


<script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>

<script src="app-assets/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/datatable/buttons.flash.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/datatable/jszip.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/datatable/pdfmake.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/datatable/vfs_fonts.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/datatable/buttons.php5.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/datatable/buttons.print.min.js" type="text/javascript"></script>

<script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
<script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
<script src="app-assets/js/customizer.js" type="text/javascript"></script>

<script src="app-assets/js/data-tables/datatable-advanced.js" type="text/javascript"></script>
<script src="app-assets/js/tag.js"></script>



  ?>
    
 
  </body>


</html> 