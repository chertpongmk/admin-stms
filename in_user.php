<?php 
        $menu="add_user";
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
            <h1 class="h3 mb-0 text-gray-800">เพิ่มข้อมูลผู้ใช้งาน</h1>
        </div>

        <!-- content -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">คำนำหน้า</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="m_firstname">
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ชื่อ</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="m_name" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">นามสกุล</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="m_lastname" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">ตำแหน่ง</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="m_position">
                                    <option value="ครู">ครู</option>
                                    <option value="นักศึกษาฝึกปฏิบัติงาน">นักศึกษาฝึกปฏิบัติงาน</option>
                                    <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                                    <option value="รองผู้อำนวยการ">รองผู้อำนวยการ</option>
                                    <option value="ธุรการ">ธุรการ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ชื่อผู้ใช้</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="m_username" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">รหัสผ่าน</label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" name="m_password" required>
                            </div>
                        </div>
                    </div>
                    <label for="1">สิทธิในการเข้าถึง</label>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="m_level" id="exampleRadios1" value="staff" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    ผู้ใช้งาน
                                </label> 
                            </div>
                        </div>
                        <div class="col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="m_level" id="exampleRadios2" value="admin">
                                    <label class="form-check-label" for="exampleRadios2">
                                        ผู้แก้ไข
                                    </label>
                                </div> 
                        </div>
                        <div class="col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="m_level" id="exampleRadios2" value="admin1">
                                    <label class="form-check-label" for="exampleRadios2">
                                        ผู้ควบคุม
                                    </label>
                                </div> 
                        </div>                      
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">รูปภาพประจำตัว</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" onchange="readURL(this);">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <img id="blah" src="http://placehold.it/180" alt="your image" style="img{max-width:180px;}input[type=file]{padding:10px;background:#2d2d2d;}" />
                    </div>
                    <div class="row mt-3 text-center">
                        <div class="col-12">
                            <a href="add_user.php" class="btn btn-danger">กลับ</a>
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