<?php
//SQL: 
//a.có cấu trúc: 
//- SQL SERVER: C#, ASP>NET
//- MYSQL: PHP, FW LARAVEL....
//=> có 3 bộ thư viện con:
//- mysql: phiên bản php 5 cũ
//- mysqli: mới -> 7
//-PDO: nước ngoài hay dùng
//. b. no SQL: mongoDB
////////////
//học mysqli
//-mysqli: chia thành 4 tầng
//tầng 1:db (cơ sở dữ liệu)
//1 website = 1db
//taangf2: table (bảng dữ liệu)
//mỗi table sẽ quản lý 1 đối tượng trên web
//mỗi db có nhiều table
//tầng 3: colum (trường thông tin)
//1 table sẽ có nhiều trường thông tin
//ID tác dụng để phân biệt dữ liệu
//tầng 4: row (thêm bản ghi)
/////////////////////
//4 câu lệnh kinh điển trong db
//1. SELECT
//SELECT user_full, user_phone FROM user
//2. INSERT
//INSERT INTO user(user_id, user_full, user_mail, user_pass, user_phone, user_add) 
//VALUES ('','Nguyễn Thị Hồng','hongnt@gmail.com','000000','0977777777','Quảng Ninh')
//3. UPDATE
//UPDATE user SET user_phone = '0966666666', user_add = 'Hải Phòng' WHERE user_id = 3
//4. DELETE
//DELETE FROM user WHERE user_id = 3
?>