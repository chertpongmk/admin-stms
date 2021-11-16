<?php 
         $menu="add_item";
    ?>
<?php 
      include ('head.php');
    ?>
    <?php 
        include ('conn.php');
       
         
         
        $mon_id=base64_decode($_GET['mon_id']);
        $sql = "SELECT * FROM tb_money WHERE mon_id='$mon_id' ";
        $result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
        $row = mysqli_fetch_array($result);
        extract($row);
    ?>
<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <?php include ('nav.php'); ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">แก้ไขยอดเงิน</h1>
        </div>
    
        <!-- content -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="api/update_mon.php" method="GET">
                    <div class="row">
                       
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ชื่อโครงการ</label>
                                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="mon_id" value="<?php echo $row['mon_id']; ?>" readonly>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="mon_name" value="<?php echo $row['mon_name']; ?>" >
                            </div>
                        </div>
                        <!-- <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">จำนวนเงิน</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="mon_total" value="<?php echo $row['mon_total'] ?>" required>
                            </div>
                        </div> -->
                    </div>
                   
                    <div class="row mt-3 text-center">
                        <div class="col-12">
                            <a href="setting_money.php" class="btn btn-danger">กลับ</a>
                            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




<?php include ('footer.php') ?>