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

<section id="dom">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Payment Gateway List</h4>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                       
                        <table class="table table-striped table-bordered dom-jQuery-events">
                            <thead>
                                <tr>
								 <th>Sr No.</th>
								 <th>Payment Gateway Name</th>
                                    <th>Pay.Gateway Image</th>
                                   
									<th>creditinals Title</th>
									<th>creditinals Value</th>
									 <th>Current Status</th>
									  <th>Action</th>
								

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sel = $con->query("select * from payment_list");
                                $i=0;
                                while($row = $sel->fetch_assoc())
                                {
                                    $i= $i + 1;
                                ?>
                                <tr>
                                    
                                    <td><?php echo $i; ?></td>
									<td><?php echo $row['title'];?></td>
                                    
                                    <td><img class="media-object round-media" src="<?php echo $row['img'];?>" alt="Generic placeholder image" style="height: 75px;"></td>
                                   
									<td><?php echo $row['cred_title'];?></td>
									<td><?php echo $row['cred_value'];?></td>
									<td><?php if($row['status'] == 1){echo 'Active';}else{echo 'Deactive';}?></td>
									 <td>
									<a class="primary" href="paymentgateway_list.php?edit=<?php echo $row['id'];?>" data-original-title="" title="">
                                            <i class="ft-edit font-medium-3"></i>
                                        </a>
										</td>
									
									
                                   
                                </tr>
                               <?php } ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




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