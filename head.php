
<?php
session_start();
// echo '<pre>';
        // print_r($_SESSION);
// echo '</pre>';
include('conn.php');
$m_id = $_SESSION['m_id'];
$m_level = $_SESSION['m_level'];
if($m_id==""){
Header("Location: logout.php");
}

//query member login
$queryemp = "SELECT * FROM tbl_emp WHERE m_id=$m_id";
$resultm = mysqli_query($condb, $queryemp) or die ("Error in query: $queryemp " . mysqli_error($condb));
$rowm = mysqli_fetch_array($resultm);
//เวลาปัจจุบัน
$timenow = date('H:i:s');
$datenow = date('Y-m-d');
//เวลาที่บันทึก
$queryworkio = "SELECT *, MAX(workdate) as lastdate, workin, workout FROM tbl_work_io WHERE m_id=$m_id AND workdate='$datenow' ";
$resultio = mysqli_query($condb, $queryworkio) or die ("Error in query: $queryworkio " . mysqli_error($condb));
$rowio = mysqli_fetch_array($resultio);
// print_r($rowio);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>stms</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet">
    <style>
    body {
      font-family: 'Kanit', sans-serif;
      
      /*font-size: 14px;*/
    }
  </style>

</head>

<body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">

<!-- Sidebar -->
<?php include('menu.php'); ?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">