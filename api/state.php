<?php
    include ('../conn.php');
    // @$state_name=$_GET['state_name'];
    // @$date_state=$_GET['date_state'];
    @$num_mon1=$_GET['num_mon1'];
    @$pj_id=$_GET['pj_id'];
    $sql1 = "SELECT * FROM `tb_statement` WHERE  pj_id='$pj_id' ";
    $result = mysqli_query($condb, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);

    if ($row['num_mon']==null) {
        $sql = "INSERT INTO `tb_statement`(`num_mon`, `pj_id`) VALUES ('$num_mon1','$pj_id')";

        if ($condb->query($sql) === TRUE) {
            echo '<script type="text/javascript">
            swal("", "บันทึกข้อมูลเรียบร้อย !!", "success");
            </script>';
    
            echo '<meta http-equiv="refresh" content="1;url=../index.php" />';
        } else {
        echo "Error updating record: " . $condb->error;
        }
    
        $condb->close();
    }else{
        $num1=$row['num_mon'];
        $num2=$num_mon1;
        $sum=$num1+$num2;
        
        // echo $num2;
        $sql = "UPDATE `tb_statement` SET `num_mon`='$sum' WHERE pj_id='$pj_id' ";

        if ($condb->query($sql) === TRUE) {
            echo '<script type="text/javascript">
            swal("", "บันทึกข้อมูลเรียบร้อย !!", "success");
            </script>';
    
            echo '<meta http-equiv="refresh" content="1;url=../index.php" />';
        } else {
        echo "Error updating record: " . $condb->error;
        }
    
        $condb->close();
    }


   

?>