<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <a href="index.php?tham_so1=gia_tr1&tham_so2=gia_tri2"></a> -->
    <?php
    //Phương thức GET
    //cú pháp truyền tham số lên url
    //tenmien.com/index.php?tham_so1=gia_tr1&tham_so2=gia_tri2&tham_so3=gia_tri3
    //$_GET['tham_so']; //biến toàn cục và lưu trữ dưới dạng mảng bất tuần tự
    //vd:
    //hàm isset($ten_bien);
    // if(isset($_GET['name']) && isset($_GET['address']) && isset($_GET['hotline'])){
    //     $name = $_GET['name'];
    //     $address = $_GET['address'];
    //     $hotline = $_GET['hotline'];
    //     echo $name.'<br/>'.$address.'<br/>'.$hotline;
    // }
//Mảng
        //$array = array(bieu_thuc1, bieu_thuc2, bieu_thuc3);
        //$array = [bieu_thuc1, bieu_thuc2, bieu_thuc3];

    //ví dụ
    //$array = [1,2,'ba','bốn',true,6.5,'bàn',6,'vân vân'];
        //echo $array;
        // echo '<pre>';
        // var_dump($array);
        // print_r($array);
        // echo '<pre/>';
        //echo $array[6];
        //vòng lặp foreach(){}
        // foreach ($array as $key => $value) {
        //    echo $key.'=>'.$value.'<br/>';
        // }
    //JSON:
    //đọc file json
    $data_json = file_get_contents('data.json');
    //chuyển json sang dạng mảng
    $result_json = json_decode($data_json, true);
    foreach ($result_json as $key => $value) {
        echo $value.'<br/>';
    }
// thêm vào json: ghi vào dữ liệu mới thì dữ liệu cũ mất đi
    $data_en_json = json_encode($result_json, JSON_UNESCAPED_UNICODE);
    //pull vào json
    file_put_contents('data.json', $data_en_json);
    ?>
    <!-- <form action="" method="GET">
        <input type="email" name="email" placeholder="Nhập email vào đây">
        <input type="password" name="pass" placeholder="Nhập Mật khẩu vào đây">
        <input type="submit" name="sbm" value="đăng nhập">
    </form> -->
</body>
</html>