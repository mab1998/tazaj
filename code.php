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
					<h4 class="card-title" id="basic-layout-form">Country Code Section</h4>
					
				</div>
				<div class="card-body">
					<div class="px-3">
					    <?php 
					    if(isset($_GET['edit']))
					    {
					        $bdata = $con->query("select * from code where id=".$_GET['edit']."")->fetch_assoc();
					    ?>
					    <form class="form" action="#" method="post" enctype="multipart/form-data">
							<div class="form-body">
								

								

								
							<div class="form-group">
									<label for="cname">Country Code</label>
									<input type="text"  class="form-control" value="<?php echo $bdata['ccode'];?>" placeholder="Enter Country Code" name="ccode" required>
								</div>

<div class="form-group">
									<label for="cname">Status</label>
									<select class="form-control" name="status" required>
<option value="">Select A Status</option>
<option value="1" <?php if($bdata['status'] == 1){echo 'selected';}?>>Active</option>
<option value="0" <?php if($bdata['status'] == 0){echo 'selected';}?> >Deactive</option>
</select>
								</div>

								
								
							</div>

							<div class="form-actions">
								
								<button type="submit" name="edit_product" class="btn btn-raised btn-raised btn-primary">
									<i class="fa fa-check-square-o"></i> Update Country Code
								</button>
							</div>
						</form>
						
					    <?php 
					    if(isset($_POST['edit_product']))
					    {
		$status = $_POST['status'];
$url = $_POST['ccode'];

   
    
    $con->query("update code set status=".$status.",ccode='".$url."' where id=".$_GET['edit']."");
   
?>
		 <script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 4500; // 1.5s
    toastr.info('Update Country Code Successfully!!!');
    setTimeout(function()
	{
		window.location.href="clist.php";
	},1500);
  });
  </script>
		<?php 
    


	
					    }
					        
					    }
					    else 
					    {
					    ?>
						<form class="form" action="#" method="post" enctype="multipart/form-data">
							<div class="form-body">
								

								

								
								<div class="form-group">
									<label for="cname">Country Code</label>
									<input type="text"  class="form-control"  placeholder="Enter Country Code" name="ccode" required>
								</div>

<div class="form-group">
									<label for="cname">Status</label>
									<select class="form-control" name="status" required>
<option value="">Select A Status</option>
<option value="1">Active</option>
<option value="0">Deactive</option>
</select>
								</div>

								
                                										
								
							</div>

							<div class="form-actions">
								
								<button type="submit" name="sub_product" class="btn btn-raised btn-raised btn-primary">
									<i class="fa fa-check-square-o"></i> Save Country Code
								</button>
							</div>
						</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<?php
		if(isset($_POST['sub_product']))
		{
		
		
$status = $_POST['status'];
$url = $_POST['ccode'];
		$con->query("insert into code(`ccode`,`status`)values('".$url."',".$status.")");
				?>
		 <script type="text/javascript">
  $(document).ready(function() {
    toastr.options.timeOut = 4500; // 1.5s
    toastr.info('Insert New Country Code Successfully!!!');
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