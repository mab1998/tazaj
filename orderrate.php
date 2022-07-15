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

<section id="dom">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Order Rate List</h4>
                </div>
                
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                       <ul class="list-group">
                          <li class="list-group-item">
                            <span class="badge bg-primary float-right">1</span> Very Good
                          </li>
                          <li class="list-group-item">
                            <span class="badge bg-info float-right">2</span> Good
                          </li>
                          <li class="list-group-item">
                            <span class="badge bg-warning float-right">3</span> Not Good
                          </li>
                         
                        </ul>
                       
                       <br>
                        <table class="table table-striped table-bordered dom-jQuery-events">
                            <thead>
                                <tr>
								 <th>Sr No.</th>
                                    <th>Order ID</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Rate Star</th>
                                    <th>Comment</th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sel = $con->query("select * from rate_order");
                                $i=0;
                                while($row = $sel->fetch_assoc())
                                {
                                    $i= $i + 1;
                                ?>
                                <tr>
                                    
                                    <td><?php echo $i; ?></td>
                                    <?php $fetch = $con->query("select * from orders where id=".$row['oid']."")->fetch_assoc();
                                    $fetchs = $con->query("select * from user where id='".$row['uid']."'")->fetch_assoc();
                                    ?>
                                    <td><?php echo $fetch['id'];?></td>
                                    <td><?php echo $fetchs['name'];?></td>
                                    <td><?php echo $fetchs['mobile'];?></td>
                                    <td><?php echo $row['rate'];?></td>
                                    <td><?php echo $row['msg'];?></td>
                                    
                                   
                                    
                                   
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    
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