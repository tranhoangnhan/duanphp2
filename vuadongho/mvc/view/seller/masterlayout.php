<?php 
  //thêm header
  include("./mvc/view/seller/include/sidebar.php");
  //thêm thanh bên trái
  //controller xử lí view hiển thị ra
  function currency_format($number, $suffix = 'đ') {
    if (!empty($number)) {
        return number_format($number, 0, ',', '.') . "{$suffix}";
    }
}
  require_once "./mvc/view/seller/".$data['page'].".php";

  //add footer
  include("./mvc/view/seller/include/footer.php");
  
  if (!function_exists('currency_format')) {
   
}
 ?>
 
    
    

