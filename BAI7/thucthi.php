<?php
//kết nối database
//b1: 
$connect = mysqli_connect('localhost','root','','hocphpk179');
if($connect){
    mysqli_query($connect, "SET NAMES 'utf8'");
    //print_r('kết nối csdl thành công');
}else{
    die('Kết nối thất bại');
}

//b2: truy vấn và thực thi
$sql = "SELECT * FROM user";
$query = mysqli_query($connect, $sql);

//b3: lấy ra bản ghi row
// hàm đếm kết quả trả về của truy vấn
// $num = mysqli_num_rows($query);
// echo $num;

//hàm lấy ra số bản ghi trong tbale
//$row = mysqli_fetch_assoc($query);
//echo $row['user_add'];
while($row = mysqli_fetch_assoc($query)){
    echo $row['user_id'].'<br>';
    echo $row['user_full'].'<br>';
    echo $row['user_mail'].'<br>';
    echo $row['user_pass'].'<br>';
    echo $row['user_phone'].'<br>';
    echo $row['user_add'].'<br>';
    echo '<hr>';
}

?>