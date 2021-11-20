    <?php 
        $menu="index";
    ?>
    <?php 
      include ('head.php');
    ?>
    <?php
          include 'conn.php';
          date_default_timezone_set("Asia/Bangkok");
                                        
            $sql = "SELECT * ,SUM(tb_project.pj_money) as total FROM `tb_money` left JOIN tb_project ON tb_project.mon_id=tb_money.mon_id GROUP BY tb_money.mon_id;";          
            $query = mysqli_query($condb, $sql);

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
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->

            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <?php 
                            $color=array("warning","primary","danger","success","info");
                            $count=-1;
                            while($row = mysqli_fetch_array($query)) {  
                                $count++; 
                                
                        ?>
                <div class="col-xl-2 col-md-6 mb-4">
                    <div class="card border-left-<?php echo $color[$count]; ?> shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div
                                        class="text-xs font-weight-bold text-<?php echo $color[$count]; ?> text-uppercase mb-1">
                                        <?php echo $row['mon_name']; ?>
                                    </div>

                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        ฿
                                        <?php 
                                                if ($row['pj_money']==null) {
                                                    echo 0;
                                                }else{
                                                    $value=$row['total'] ;
                                                    echo number_format(" ".$value);  
                                                }
                                                ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-wallet fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>

            <!-- Content Row -->
            
                <div class="card shadow mb-12">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-10">
                                <h6 class="m-0 font-weight-bold text-primary">ตารางโครงการ</h6>
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
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        include 'conn.php';
                                        date_default_timezone_set("Asia/Bangkok");
                                        
                                          $sql = "SELECT * FROM `tb_project`JOIN tb_money ON tb_project.mon_id=tb_money.mon_id";          
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
                                                 $value=$result['pj_money'] ;
                                                 echo number_format($value); 
                                              ?>
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