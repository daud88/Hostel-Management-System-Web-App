<?php
include('includes/checklogin.php');
check_login();
if(isset($_POST['save']))
{

  $student_name=$_POST['student_name'];
  $attend_date=$_POST['attend_date'];
  $leave_status=$_POST['leave_status'];
  $remark=$_POST['remark'];
  $sql="insert into attendance(student_name,attend_date,leave_status,remark)values(:student_name,:attend_date,:leave_status,:remark)";
  $query=$dbh->prepare($sql);
  $query->bindParam(':student_name',$student_name,PDO::PARAM_STR);
  $query->bindParam(':attend_date',$attend_date,PDO::PARAM_STR);
  $query->bindParam(':leave_status',$leave_status,PDO::PARAM_STR);
  $query->bindParam(':remark',$remark,PDO::PARAM_STR);
  $query->execute();
  $LastInsertId=$dbh->lastInsertId();
  if ($LastInsertId>0) 
  {
    echo '<script>alert("Attendance Added successfully")</script>';
    echo "<script>window.location.href ='add_attendance.php'</script>";
  }
  else
  {
    echo '<script>alert("Something Went Wrong. Please try again")</script>';
  }
}
if (isset($_GET['del'])) {
  $id = intval($_GET['del']);
  $sql = "delete from attendance where id=:cid";
  $query2 = $dbh->prepare($sql);
  $query2->bindParam(':cid', $id, PDO::PARAM_STR);
  $query2->execute();
  if ($query2->execute()) {
    echo "<script>alert('Attendance Deleted');</script>";
    echo "<script>window.location.href ='add_attendance.php'</script>";
  } else {
    echo "<script>alert('Failed try again later.');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php @include("includes/head.php");?>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php @include("includes/header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php @include("includes/sidebar.php");?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
               <div class="modal-header">
                <h5 class="modal-title" style="float: left;">Add Attendance</h5>
              </div>
              <div class="col-md-12 mt-4">
                <form class="forms-sample" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row ">
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Student Name</label>
                      <input type="text" name="student_name" value="" class="form-control" id="student_name"required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Attend Date</label>
                      <input type="date" name="attend_date" value="" class="form-control" id="attend_date"required>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Is Leave?</label>
                      <Select name="leave_status" class="form-control" required>
                        <option value="">Select Status</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </Select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Remark</label>
                      <input type="text" name="remark" value="" class="form-control" id="remark" placeholder='if any?'>
                    </div>
                  </div>
                  <button type="submit" style="float: left;" name="save" class="btn btn-primary mr-2 mb-4">Add Attendance</button>
                </form>
              </div>
            </div>
          </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <!--  start  modal -->
              <div id="editData4" class="modal fade">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Attendance</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="info_update4">
                      <?php @include("edit_attendance.php");?>
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
              </div>
              <!--   end modal -->
              <div class="table-responsive p-3">
              <table class="table align-items-center table-flush table-hover table-bordered" id="dataTableHover">
                  <thead>
                  <tr>
                      <th class='text-center' style='color: #ffffff; background-color: black;' colspan='6'><h2>Attendance List</h2></th>
                    </tr>
                    <tr>
                      <th class="text-center" scope='col'>Sno.</th>
                      <th class="text-center" scope='col'>Student Name</th>
                      <th class="text-center" scope='col'>Attend Date</th>
                      <th class="text-center" scope='col'>Leave Status</th>
                      <th class="text-center" scope='col'>Remark</th>
                      <th class="text-center" scope='col' style="width: 15%;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql="SELECT * from attendance ORDER BY id DESC";
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
                          <td class="text-center"><?php echo $row->student_name;?></td>
                          <td class="text-center"><?php  echo htmlentities(date("d-m-Y", strtotime($row->attend_date)));?></td>
                          <td class="text-center"><?php echo $row->leave_status;?></td>
                          <td class="text-center"><?php echo $row->remark;?></td>
                          <td class=" text-center"><a href="#"  class=" edit_data4" id="<?php echo  ($row->id); ?>" title="click to edit"><i class="mdi mdi-pencil-box-outline" aria-hidden="true"></i></a>
                            <a href="add_attendance.php?del=<?php echo $row->id;?>" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Do you really want to delete?');"> <i class="mdi mdi-delete"></i> </a>
                          </td>
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
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <?php @include("includes/footer.php");?>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<?php @include("includes/foot.php");?>
<!-- End custom js for this page -->
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','.edit_data4',function(){
      var edit_id4=$(this).attr('id');
      $.ajax({
        url:"edit_attendance.php",
        type:"post",
        data:{edit_id4:edit_id4},
        success:function(data){
          $("#info_update4").html(data);
          $("#editData4").modal('show');
        }
      });
    });
  });
</script>
</body>
</html>