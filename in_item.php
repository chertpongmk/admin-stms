<?php 
        $menu="add_item";
    ?>
<?php 
      include ('head.php');
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
            <h1 class="h3 mb-0 text-gray-800">เพิ่มข้อมูลโครงการ</h1>
        </div>

        <!-- content -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="api/insert_item.php" method="GET">
                    <div class="row">
                       
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ชื่อโครงการ</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="pj_name" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">งบแผนปฏิบัติการ</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="mon_id">
                                    <?php 
                                        include 'conn.php';
                                        date_default_timezone_set("Asia/Bangkok");
                                                                    
                                        $sql = "SELECT * FROM `tb_money`";          
                                        $query = mysqli_query($condb, $sql);
                            
                                        while($row = mysqli_fetch_array($query)) {  
                                           
                                    ?>
                                        <option value="<?php echo $row['mon_id']; ?>"><?php echo $row['mon_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">จำนวนเงินงบประมาณ</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="pj_money" required>
                            </div>
                        </div>
                    </div>
                   
              
                 
                    <div class="row mt-3 text-center">
                        <div class="col-12">
                            <a href="add_ระำท.php" class="btn btn-danger">กลับ</a>
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