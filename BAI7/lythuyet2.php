<?php
//5 câu lệnh bổ trợ cho select
//WHERE (Điều kiện)
//lấy ra tất cả các thành viên ở hanoi
//SELECT * FROM user WHERE add = 'Hà Nội'
//2-3: AND - OR / và : hoặc
// lấy ra tất cả các thành viên ở hà nội và sinh năm 2000
//SELECT * FROM user WHERE add='hanoi' AND birthday >='2000-01-01' AND birthday <= '2000-12-31'
// lấy ra tất cả các thành viên ở hà nội hoặc sinh năm 2000
//SELECT * FROM user WHERE add='hanoi' OR birthday >='2000-01-01' AND birthday <= '2000-12-31'
//4. ORDER BY (sắp xếp theo thứ tự) tăng dần ASC /  giảm dần DESC
//SELECT * FROM user ORDER BY user_id ASC
//5.LIMIT (giới hạn số bản ghi hiển thị)
//lấy ra tất cả 5 sản phẩm mới nhất
//SELECT * FROM product ORDER BY prd_id DESC LIMIT 5

//kết nối bảng
//SELECT * FROM product INNER JOIN category ON product.cat_id=category.cat_id













?>