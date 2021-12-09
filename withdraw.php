<?php 
         $menu="add_item";
    ?>
<?php 
      include ('head.php');
    ?>
    <?php 
        include ('conn.php');
       
         
         
        $pj_id=base64_decode($_GET['pj_id']);
        $sql = "SELECT * FROM `tb_project` WHERE  pj_id='$pj_id' ";
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
            <h1 class="h3 mb-0 text-gray-800">เบิกเงินโครงการ <?php echo $row['pj_name']; ?></h1>
        </div>
    
        <!-- content -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="api/state.php" method="GET">
                    <div class="row">
                       
                      
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">จำนวนเงินที่ต้องการเบิก</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="num_mon1"  required>
                                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="pj_id" value="<?php echo $pj_id; ?>" readonly>
                            </div>
                        </div>
                       
                    </div>
                   
                    <div class="row mt-3 text-center">
                        <div class="col-12">
                            <a href="add_item.php" class="btn btn-danger">กลับ</a>
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