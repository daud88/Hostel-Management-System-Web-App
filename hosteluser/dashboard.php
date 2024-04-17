<?php 
include('includes/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
<?php @include("includes/head.php");?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php @include("includes/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php @include("includes/sidebar.php");?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-md-6 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <h4 class="font-weight-normal mb-3">Personal Info
                  </h4>
                  <h2 class="mb-5"><a href="profile.php" style="color: #ffffff;">View profile </a> </h2>
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <h4 class="font-weight-normal mb-3">Room Info
                  </h4>
                   <h2 class="mb-5"><a href="student_details.php" style="color: #ffffff;">View Booking Details</a> </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
          <div class="table-responsive p-3">
              <table class="table align-items-center table-flush table-hover table-bordered" id="dataTableHover">
                  <thead>
                    <tr>
                      <th class='text-center' style='color: #ffffff; background-color: black;' colspan='4'><h2> Notice Board</h2></th>
                    </tr>
                    <tr>
                      <th class="text-center" scope='col'>Sno.</th>
                      <th class="text-center" scope='col'>Title</th>
                      <th class="text-center" scope='col'>Description</th>
                      <th class="text-center" scope='col'>Posting Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql="SELECT * from notice ORDER BY id DESC";
                    $query = $dbh -> prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                    {
                      foreach($results as $row)
                      { 

                        ?>
                        <tr scope="row">
                          <td class="text-center"><?php echo $cnt;;?></td>
                          <td class="text-center"><?php echo $row->title;?></td>
                          <td class="text-center"><?php echo $row->description;?></td>
                          <td class="text-center"><?php  echo htmlentities(date("d-m-Y", strtotime($row->postingDate)));?></td>
                        </tr>
                        <?php 
                        $cnt=$cnt+1;
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
        </div>
        </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php @include("includes/footer.php");?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php @include("includes/foot.php");?>
  
</body>
</html>


