<?php 
        $menu="add_item3";
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
      <h1 class="h3 mb-0 text-gray-800">โครงการ</h1>
    </div>

    <!-- content -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <div class="row">
          <div class="col-10">
            <h6 class="m-0 font-weight-bold text-primary">ตารางงบพัฒนาผู้เรียน</h6>
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>ลำดับ</th>
                <!-- <th>รูปภาพประจำตัว</th> -->
                <th>ชื่อโครงการ</th>
                <th>ประเภท</th>
                <th>ยอดเงินโครงการ</th>
                <th>ยอดเงินคงเหลือ</th>
                <th>....</th>
              </tr>
            </thead>

            <tbody>
              <?php
                                        include 'conn.php';
                                        date_default_timezone_set("Asia/Bangkok");
                                        
                                          $sql = "SELECT * ,tb_project.pj_id as id FROM `tb_project`JOIN tb_money ON tb_project.mon_id=tb_money.mon_id left JOIN tb_statement ON tb_project.pj_id=tb_statement.pj_id where tb_project.type_project=3";          
                                          $query = mysqli_query($condb, $sql);
                                      
                                        $count = 0;
                                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                          $count++;
                                        ?>
              <tr>
                <td><?php echo $count; ?></td>


                <td><?php echo $result['pj_name']?></td>
                <td><?php echo $result['mon_name']?></td>
                <td>

                  <?php 
                                                 $value=$result['pj_money'] ;
                                                 echo number_format($value); 
                                              ?>
                </td>
                <td>
                  <?php 
                                    if ($result['num_mon']==null) {
                                      $value=$result['pj_money'] ;
                                       echo number_format($value);
                                }else {
                                     $num1=$result['pj_money'] ;
                                     $num2=$result['num_mon'];
                                     $re=$num1-$num2;
                                     echo number_format($re);
                                     
                                }
                                              ?>
                </td>

                <td class="text-center">
                <a href="withdraw.php?pj_id=<?php echo base64_encode($result['id']);  ?>"class="btn btn-warning"><i class="far fa-edit"></i> เบิกเงินโครงการ</a>
                  <!-- <a href="edit_money.php?mon_id=<?php echo $result['mon_id']; ?>" class="btn btn-warning"><i class="far fa-edit"></i> แก้ไข</a>
                                              <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i> ลบ</a> -->
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