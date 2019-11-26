<?php
$file = $_GET['file'];
//bước 1: mở file
$file_path = 'upload/'.$file;
//thông báo tải file:
header("Content-Disposition: attachment; filename = $file"); //tải xuống
//bước 3: trình duyệt sẽ trả về định dạng files
header("Content-Type: application/pdf");
//bước 4: đọc files
readfile($file_path);
?>