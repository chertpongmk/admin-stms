<?php


$str = 'local';
echo base64_decode($str);

// function s_date_diff($str_start, $str_end)
// {

// $str_start = strtotime($str_start); // ทำวันที่ให้อยู่ในรูปแบบ timestamp
// $str_end = strtotime($str_end); // ทำวันที่ให้อยู่ในรูปแบบ timestamp

// $nseconds = $str_end - $str_start; // วันที่ระหว่างเริ่มและสิ้นสุดมาลบกัน
// $ndays = round($nseconds / 86400); // หนึ่งวันมี 86400 วินาที
//  return $ndays;
// }

// $df=s_date_diff("2021-09-18","2021-09-19");
// echo $df;

?>