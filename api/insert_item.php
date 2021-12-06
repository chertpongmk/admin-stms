<?php
    include ('../conn.php');
    @$pj_name=$_GET['pj_name'];
    @$pj_money=$_GET['pj_money'];
    @$mon_id=$_GET['mon_id'];
    @$type_project=$_GET['type_project'];
    $sql = "INSERT INTO `tb_project`( `pj_name`, `pj_money`, `mon_id`,type_project) VALUES ('$pj_name','$pj_money','$mon_id','$type_project')";

    if ($condb->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        swal("", "บันทึกข้อมูลเรียบร้อย !!", "success");
        </script>';

        echo '<meta http-equiv="refresh" content="1;url=../in_item.php" />';
    } else {
    echo "Error updating record: " . $condb->error;
    }

    $condb->close();

?>