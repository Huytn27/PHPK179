<?php
function Links($chuoiThucThi,$soBanGhi,$trangHienTai,$conn)
{
    //lấy URL đường dẫn
    $requestUrl=str_replace('&page='.$trangHienTai,'',$_SERVER['REQUEST_URI']);
    
    // Lấy tổng bản ghi của cả bảng
    $tongBanGhi=mysqli_num_rows(mysqli_query($conn,$chuoiThucThi));
    $soTrang= ceil($tongBanGhi/$soBanGhi);



    $paginate='<ul class="pagination">';

    if($trangHienTai<=1)
    {
        $paginate.='
        <li class="page-item disabled">
        <a class="page-link">&laquo;</a>
        </li>';
    }
    else
    {
        $paginate.='
        <li class="page-item">
        <a class="page-link" href="'.$requestUrl.'&page='.($trangHienTai-1).'">&laquo;</a>
        </li>';
    }
   
    //đường dẫn trang
    for ($i=1; $i <= $soTrang; $i++) { 
        if($trangHienTai==$i) 
        {
            $active='active';
        }
        else
        {
            $active='';
        }


        $paginate.='
        <li class="page-item '.$active.'"><a class="page-link" href="'.$requestUrl.'&page='.$i.'">'.$i.'</a></li>
        ';
    }

    if($trangHienTai>=$soTrang)
    {
        $paginate.='<li class="page-item disabled"><a class="page-link" >&raquo;</a></li>';
    }
    else
    {
        $paginate.='<li class="page-item"><a class="page-link" href="'.$requestUrl.'&page='.($trangHienTai+1).'">&raquo;</a></li>';
    }
   

    $paginate.='</ul>';

    return $paginate;

}
