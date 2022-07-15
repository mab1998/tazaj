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
 
<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Update Profile</h4>
					
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="form-body">
								

								<?php 
								$getkey = $con->query("select * from admin")->fetch_assoc();
								?>

								<div class="form-group">
									<label for="cname">Username</label>
									<input type="text" id="cname" class="form-control"  name="username" value="<?php echo $getkey['username'];?>" required >
								</div>
                                <div class="form-group">
									<label for="cname">Password</label>
									<input type="text" id="cname" class="form-control"  name="password" value="<?php echo $getkey['password'];?>" required >
								</div>

								
							</div>

							<div class="form-actions">
								
								<button type="submit" name="sub_cat" class="btn btn-raised btn-raised btn-primary">
									<i class="fa fa-check-square-o"></i> Update Profile
								</button>
							</div>
							
							<?php 
							if(isset($_POST['sub_cat'])){
							$username = $_POST['username'];
							$password = $_POST['password'];
							
							
$con->query("update admin set username='".$username."',password='".$password."' where id=1");

?>
						
							 <script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 4500; // 1.5s
    toastr.info('Update Profile Successfully!!!');
    window.location.href="profile.php";
	
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