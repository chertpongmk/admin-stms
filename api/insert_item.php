<?php
    include ('../conn.php');
    @$pj_name=$_GET['pj_name'];
    @$pj_money=$_GET['pj_money'];
    @$mon_id=$_GET['mon_id'];
    $sql = "INSERT INTO `tb_project`( `pj_name`, `pj_money`, `mon_id`) VALUES ('$pj_name','$pj_money','$mon_id')";

    if ($condb->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        swal("", "บันทึกข้อมูลเรียบร้อย !!", "success");
        </script>';

        echo '<meta http-equiv="refresh" content="1;url=../add_item.php" />';
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $condb->close();

?>