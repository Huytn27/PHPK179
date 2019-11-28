<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//session
//ss là 1 phiên làm việc của người dùng trên websitre
//1 tk ss = 1 tk người dùng
//nó sẽ bắt đầu từ khi người dùng truy cập vào website và kết thúc khi tắt trình duyệt hoặc dùng lệnh để hủy
// session_start(); // khởi tạo ss
// $_SESSION['name']=user; //cú pháp
// //các cú pháp để hủy ss
// unset($_SESSION['name']); //xóa ss nào đó chỉ định
// session_unset(); //hủy ss theo 1 phiên
// session_destroy(); //hủy tất cả ss
// session_start();
// if(isset($_POST['sbm'])){
//     $_SESSION['name'] = $_POST['name'];
// }
// if(isset($_SESSION['name'])){
//     echo $_SESSION['name'];
// }
//chuyển hướng và báo lỗi
//chuyển hướng
//header('location: https://google.com');
//báo lỗi
//die('Bạn không có quyền truy cập');
//hằng
define('VIETPRO', 'Học viện công nghệ VIETPRO');
if(defined('VIETPRO')){
    echo 'abc';
}
?>
<!-- <form action="" method="POST">
    <input type="text" name="name">
    <input type="submit" name="sbm">
</form> -->
</body>
</html>