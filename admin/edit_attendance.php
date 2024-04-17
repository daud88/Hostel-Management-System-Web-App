<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['insert']))
{
    $eib= $_SESSION['editbid'];
    $student_name=$_POST['student_name'];
    $attend_date=$_POST['attend_date'];
    $leave_status=$_POST['leave_status'];
    $remark=$_POST['remark'];
    $sql4="update attendance set student_name=:student_name,attend_date=:attend_date,leave_status=:leave_status,remark=:remark where id=:eib";
    $query=$dbh->prepare($sql4);
    $query->bindParam(':student_name',$student_name,PDO::PARAM_STR);
    $query->bindParam(':attend_date',$attend_date,PDO::PARAM_STR);
    $query->bindParam(':leave_status',$leave_status,PDO::PARAM_STR);
    $query->bindParam(':remark',$remark,PDO::PARAM_STR);
    $query->bindParam(':eib',$eib,PDO::PARAM_STR);
    $query->execute();
    if ($query->execute())
    {
        echo '<script>alert("updated successfuly")</script>';
    }else{
        echo '<script>alert("update failed! try again later")</script>';
    }
}
?>
<div class="card-body">
    <?php
    $eid=$_POST['edit_id4'];
    $sql2="SELECT * from attendance  where attendance.id=:eid";
    $query2 = $dbh -> prepare($sql2);
    $query2-> bindParam(':eid', $eid, PDO::PARAM_STR);
    $query2->execute();
    $results=$query2->fetchAll(PDO::FETCH_OBJ);
    if($query2->rowCount() > 0)
    {
        foreach($results as $row)
        {
            $_SESSION['editbid']=$row->id;
            ?>
            <form class="form-sample"  method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-12 ">
                        <label class="col-sm-12 pl-0 pr-0">Student Name</label>
                        <div class="col-sm-12 pl-0 pr-0">
                            <input type="text" name="student_name" id='student_name'value="<?php  echo $row->student_name;?>" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 ">
                        <label class="col-sm-12 pl-0 pr-0">Attend Date</label>
                        <div class="col-sm-12 pl-0 pr-0">
                            <input type="date" name="attend_date" id='attend_date' value="<?php  echo $row->attend_date;?>" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 ">
                        <label class="col-sm-12 pl-0 pr-0">Leave Status</label>
                        <div class="col-sm-12 pl-0 pr-0">
                        <Select name="leave_status" class="form-control" required>
                        <option value="">Select Status</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </Select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 ">
                        <label class="col-sm-12 pl-0 pr-0">Remark</label>
                        <div class="col-sm-12 pl-0 pr-0">
                            <input type="text" name="remark" id='remark' value="<?php  echo $row->remark;?>" class="form-control" >
                        </div>
                    </div>
                </div>
                <button type="submit" name="insert" class="btn btn-primary btn-fw mr-2" style="float: left;">Update</button>
            </form>
            <?php 
        }
    } ?>
</div>