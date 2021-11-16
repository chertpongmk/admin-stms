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
                        <h1 class="h3 mb-0 text-gray-800">ข้อมูลผู้ใช้งาน</h1>
                    </div>

                  <!-- content -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <div class="row">
                              <div class="col-10">
                                <h6 class="m-0 font-weight-bold text-primary">ตารางข้อมูลผู้ใช้งาน</h6>
                              </div>
                              <div class="col-2">
                                <a href="in_user.php" class="btn btn-success text-right"><i class="fas fa-user-plus"></i> เพิ่ม</a>
                              </div>
                          </div>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ลำดับ</th>
                                            <th>รูปภาพประจำตัว</th>
                                            <th>ชื่อ</th>
                                            <th>สถานะ</th>
                                            <th>....</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php
                                        include 'conn.php';
                                        date_default_timezone_set("Asia/Bangkok");
                                        
                                          $sql = "SELECT * FROM `tbl_emp` ";          
                                          $query = mysqli_query($condb, $sql);
                                      
                                        $count = 0;
                                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                          $count++;
                                        ?>
                                        <tr class="text-center">
                                            <td><?php echo $count; ?></td>
                                            <td >
                                                <?php  if ($result['m_img']==null) {
                                                  echo '<img class="img-profile rounded-circle" src="img/undraw_profile.svg" style="width:100px">';
                                                }else {
                                                    echo '<img class="img-profile rounded-circle" src="img/'.$result['m_img'].'" style="width:100px">';
                                                }?>                         
                                            </td>
                                            <td><?php echo $result['m_firstname'].$result['m_name']."  ".$result['m_lastname'] ; ?></td>
                                            <td><?php echo $result['m_position'] ?></td>
                                            <td class="text-center">
                                              <a href="" class="btn btn-warning"><i class="far fa-edit"></i> แก้ไข</a>
                                              <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i> ลบ</a>
                                            </td>  
                                        </tr>
                                        <?php } ?>  
                                    </tbody>
                                </table>
                              
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         
      

 <?php include ('footer.php') ?>