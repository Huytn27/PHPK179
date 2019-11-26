<?php
//biểu thức điều kiện if
// if(biểu thức){
// code thực thi
// }
//ví dụ: 
// $soNguyen = 10;
// if($soNguyen > 0){
//     echo 'đây là số nguyên dương';
// }
//biểu thức đk if else
// if(bt){

// }else{

// }
// $soNguyen = 0;
// if($soNguyen > 0){
//     echo 'đây là số nguyên dương';
// }else{
//     echo ' đây là số nguyên âm';
// }
//biểu thức đk if else if else
// if(){

// }else if(){

// }else{

// }
// $soNguyen = 0;
// if($soNguyen > 0){
//     echo 'đây là số nguyên dương';
// }else if($soNguyen < 0){
//     echo 'đây là số nguyên âm';
// }else{
//     echo 'đây là số 0';
// }
// vòng lặp while
// while(biểu thức){
//     code thực thi
// }
//ví dụ: in ra các số chạy từ 5 đến 9 và mỗi dương với 1 dòng
// $i = 5;
// while($i < 10){
//     echo $i.'<br/>';
//     $i++;
// }
//ví duj2: in ra các số từ 10 đến 1 và có dấu phảy , dấu chấm sau số 1
//10,9,8,7,6,5,4,3,2,1.
// $so = 10;
// while($so > 0){
//     if($so > 1){
//         echo $so.',';
//     }else{
//         echo $so.'.';
//     }
//     $so--;
// }
//for
// for(khửi tạo bt; biểu thức; tăng/giảm bt){
// code thực thi
// }
//vd: dùng vòng lặp for lấy ra các số chẵn từ 10 đến 0
// for($i = 10; $i >= 0; $i -= 2){
//     echo $i.',';
// }
//bài tập: tính tổng của dãy số từ 1 đến 100
// $i = 0;
// for($a=1; $a<=100; $a++){
//     $i += $a;
// }
// echo $i;
//thiết kế bảng cửu chương từ 2-9
for($a=2; $a<=9; $a++){
    for($b=1; $b<=10; $b++){
        echo $a.'x'.$b.'='.$a*$b.',';
    }
    echo '<br/>';
}

?>