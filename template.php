 <?php 
  require 'include/header.php';
  ?>
  <body data-col="2-columns" class=" 2-columns ">
      <div class="layer"></div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


     
      <?php include('main.php'); ?>
      <!-- Navbar (Header) Ends-->

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper"><!--Statistics cards Starts-->
<?php if(isset($_GET['edit'])) {
$sels = $con->query("select * from template where id=".$_GET['edit']."");
$sels = $sels->fetch_assoc();
?>
<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Edit Notification</h4>
					
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
							<div class="form-body">
								

								

								<div class="form-group">
									<label for="cname">Message</label>
									<input type="text" id="cname" value="<?php echo $sels['message'];?>" class="form-control"  name="msg" required >
								</div>

									<div class="form-group">
									<label for="cname">Title</label>
									<input type="text" id="dcharge" value="<?php echo $sels['title'];?>" class="form-control"  name="title"   >
								</div>

							<div class="form-group">
									<label for="cname">select image (optional)</label>
									<input type="file" id="dcharge"  class="form-control"  name="url"   >
									<?php 
									if( $sels['url'] == 'no_url')
									{
									}
									else 
									{
										?>
										<img src="<?php echo $sels['url'];?>" width="100" height="100"/>
										<?php 
									}
									?>
								</div>
								
							

								
							</div>

							<div class="form-actions">
								
							<input type="submit" name="up_quiz" class="btn btn-raised btn-raised btn-primary" value="Save"/>
							</div>
							
							
						</form>
						
						<?php 
							if(isset($_POST['up_quiz'])){
							$msg = mysqli_real_escape_string($con,$_POST['msg']);
	    $url = $_FILES["url"]["name"];
	   $title = mysqli_real_escape_string($con,$_POST['title']);
	   if(empty($url))
	   {
	       
	   $con->query("update template set message='".$msg."',title='".$title."' where id=".$_GET['edit'].""); 

	   }
	   else 
	   {
	    $target_dir = "cat/";
$url = $target_dir . basename($_FILES["url"]["name"]);
$imageFileType = strtolower(pathinfo($url,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	?>
	 <script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 4500; // 1.5s

    toastr.error('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
    setTimeout(function()
	{
		window.location.href="template.php";
	},1500);
  });
  </script>
	<?php 
   
    
}
else 
{
	move_uploaded_file($_FILES["url"]["tmp_name"], $url);
}
$con->query("update template set message='".$msg."',title='".$title."',url='".$url."' where id=".$_GET['edit'].""); 
	   }
	   
	   
	    
	 
    
?>
						
							<script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 4500; // 1.5s

    toastr.info('Notification Update Successfully!!');
	setTimeout(function()
	{
		window.location.href="templatelist.php";
	},1500);
    
  });
  </script>
  <?php
							}
							?>
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
					<h4 class="card-title" id="basic-layout-form">Add Notification</h4>
					
				</div>
				<div class="card-body">
					<div class="px-3">
						<form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
							<div class="form-body">
								

								

								<div class="form-group">
									<label for="cname">Message</label>
									<input type="text" id="cname" class="form-control" placeholder="Enter Message"  name="msg" required >
								</div>
								
								<div class="form-group">
									<label for="cname">Title</label>
									<input type="text" id="dcharge"  class="form-control" placeholder="Enter Title"  name="title"  >
								</div>
 
									<div class="form-group">
									<label for="cname">Select Image (optional)</label>
									<input type="file" id="dcharge"  class="form-control"   name="url"  >
								</div>


							

								
							</div>

							<div class="form-actions">
								
								
								<input type="submit" name="sav_quiz" class="btn btn-raised btn-raised btn-primary" value="Save"/>
							</div>
							
							
						</form>
						
						
						<?php 
							if(isset($_POST['sav_quiz'])){
							$msg = mysqli_real_escape_string($con,$_POST['msg']);
	    $url = $_FILES["url"]["name"];
	   $title = mysqli_real_escape_string($con,$_POST['title']);
	   
	   if(empty($url))
	   {
	        $url = 'no_url';
	   }
	   else 
	   {
		   
		   $target_dir = "cat/";
$url = $target_dir . basename($_FILES["url"]["name"]);
$imageFileType = strtolower(pathinfo($url,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	?>
	 <script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 4500; // 1.5s

    toastr.error('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
    setTimeout(function()
	{
		window.location.href="template.php";
	},1500);
  });
  </script>
	<?php 
   
    
}
else 
{
	move_uploaded_file($_FILES["url"]["tmp_name"], $url);
}
	   }
	   
	  
	    
	  
      $con->query("insert into template(`message`,`url`,`title`)values('".$msg."','".$url."','".$title."')");

							?>
						
							 <script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 4500; // 1.5s

    toastr.info('Insert Notification Successfully!!!');
   
  });
  </script>
  <?php 
							}
							?>
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