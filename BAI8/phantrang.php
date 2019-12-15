<?php
//lýt thuyết phaan trang
// SELECT * FROM product LIMIT 5
// Trang 1: 1-5 | 0-4| SELECT * FROM product LIMIT 0, 5
// Trang 2: 6-10| 5-9 | SELECT * FROM product LIMIT 5, 5
// .....
// Trang N là ($page)
// /////////

// SELECT * FROM product LIMIT 3

// $rows_per_page = 3;

// 1 sản phẩm 0
// 2 sản phẩm 1
// 3 sản phẩm 2

// 4 sản phẩm 3
// 5 sản phẩm 4
// 6 sản phẩm 5

// 7 sản phẩm 6

// $page = $_GET['page'];
// ???????????

// $per_rows = $page * $rows_per_page - $rows_per_page;
// Bấm vào trang1: 1*3-3=0
// ấm vào trang 2: 2*3-3=3
// Bấm vào trang 3: 3*3-3=6
// .......


// LIMIT 0, 3
// LIMIT 3, 3
// LIMIT 6, 3
?>