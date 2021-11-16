<?php
    include ('../conn.php');
    @$mon_id=$_GET['mon_id'];
    @$mon_name=$_GET['mon_name'];
    $sql = "UPDATE tb_money SET mon_name='$mon_name' WHERE mon_id=$mon_id";

    if ($condb->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        swal("", "อัปเดตข้อมูลเรียบร้อย !!", "success");
        </script>';

        echo '<meta http-equiv="refresh" content="1;url=../setting_money.php" />';
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $condb->close();

?>