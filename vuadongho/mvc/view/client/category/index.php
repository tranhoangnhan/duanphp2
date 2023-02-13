 
        <div class=" gach1  ">
           
           </div>
           <!-- container -->
           
           <div class="row container_shop buocdem">
               <div class="box_danhmuc_left">
                   <h4 class="" style="margin-bottom: 15px;">
                      Thương Hiệu
                   </h4>
               <div class="box_danhmuc_left_thuonghieu">
                  <ul>
                   
                   <li><input type="checkbox"> <a href="">Đồng Hồ Rolex</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Rolex</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Rolex</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Rolex</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Rolex</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Rolex</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Rolex</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Hublot</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Hublot</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Hublot</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Hublot</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Hublot</a></li>
                   <li><input type="checkbox"> <a href="">Đồng Hồ Hublot</a></li>
                   
   
   
                  </ul>
               
               </div>
               <h4 class="" style="margin-bottom: 15px;">
                   Mức Giá
                </h4>
               <div class="box_danhmuc_left_thuonghieu">
                   <ul>
                    
                    <li><input type="checkbox"> <a href="">Dưới 1.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Dưới 5.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Dưới 10.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Dưới 20.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Dưới 50.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Dưới 100.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Dưới 150.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Dưới 300.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Dưới 500.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Dưới 1.000.000.000đ</a></li>
                    <li><input type="checkbox"> <a href="">Khác</a></li>
                   </ul>
                
                </div>
   
                <!-- end -->
                <div class="box_danhmuc_left_banner">
                   <img src="https://thietkehaithanh.com/wp-content/uploads/2021/01/BANNER-01-DONG-HO.jpg" alt="">
                </div>
           </div>
   
               <div class="box_sanpham_right">
                   <div class="box_sanpham_right_header ">
                       <h4 style="margin-left: 10px;">Đường Dẫn</h4>
                       <b class="chon_loc"><i class="fa fa-filter" aria-hidden="true"></i> Sắp xếp theo
                           <div class="chon_loc_con">
                               <ul>
                                   <li> <a href="" style="font-weight: 500;"> Sắp xếp theo</a></li>
                                   <li><a href=""></a>Sản phảm mới nhất</li>
                                   <li><a href=""></a>Sản phảm mới nhất</li>
                                   <li><a href=""></a>Sản phảm mới nhất</li>
                                   <li><a href=""></a>Sản phảm mới nhất</li>
                               </ul>
                           </div>
                       </b>
                       
                   </div>
                   <div class="gach3"></div>
                   <div class="box_sanpham mrbt15">
                       <?php while($product = mysqli_fetch_array($data['product'])) { ?>
                       <div class="item_sanpham_danhmuc">
                           <div class="item_sanpham_danhmuc_img"><img src="upload/<?=$product['product_image']?>" alt=""></div>
                           <a href="home/product_details/<?=$product['id_product']?>" class="name_sanpham"><?=$product['product_name']?> </a>
                           <div class="price">
                               <div class="price_sell"><?= currency_format($product['price'])  ?></div>
                               <div class="price_old"><?= currency_format($product['price_sale'])  ?></div>
                           </div>
                       </div>
                       <?php } ?>
                      
                   </div>
   
                   
                   <div class="chuyentrang"  >
                       <a href=""> 1  </a>
                       <a href=""> 2  </a>
                       <a href=""> 3  </a>
                       <a href="">Trang tiếp ></a>
                   </div>
               </div>
              <!-- end right -->
   
              <div class="box_danhmuc_banner_right">
                   <div class="banner_danhmuc_right_1">
                       <img src="./img/banner_right.png" alt="">
                   </div>
   
                   <div class="banner_danhmuc_right_2">
                       <img src="https://dongholuxury.vn/wp-content/uploads/2022/07/banner03.jpg" alt="">
                   </div>
                   <!-- <div class="banner_danhmuc_right_1">
                       <img src="https://luxshopping.vn/Uploads/News/banner14.jpg" alt="">
                   </div> -->
              </div>
   
            </div>
            
            <h1 class="text-ss1 row center buocdem_xl ">SẢN PHẢM BẠN ĐÃ XEM</h1>
   
            <section class="section1 row buocdem">
            
                <div class="box_item row20">
                    <img src="https://luxuryvip.vn/wp-content/uploads/2020/08/dien-thoai-vertu-signature-s-vang-trang-nguyen-khoi-like-new.jpg" alt="">
                    <h3 class="mota">Đông hồ Rolex Nam cao cấp thụy sĩ</h3>
                
                    <div class="giasell">1900.000đ</div>
                    <div class="gia">3999.999đ</div>
               
                    
                </div>
                <div class="box_item row20 ">
                    <img src="https://luxuryvip.vn/wp-content/uploads/2020/08/dien-thoai-vertu-signature-s-trang-kham-trai-2-vien-like-new.jpg" alt="">
                    <h3 class="mota">Đông hồ Rolex Nam cao cấp thụy sĩ</h3>
                
                    <div class="giasell">1900.000đ</div>
                    <div class="gia">3999.999đ</div></div>
                <div class="box_item row20 "><img src="https://luxuryvip.vn/wp-content/uploads/2020/08/dien-thoai-vertu-siganture-s-ultimate-dlc-mix-gold-like-new.jpg" alt="">
                    <h3 class="mota">Đông hồ Rolex Nam cao cấp thụy sĩ</h3>
                
                    <div class="giasell">1900.000đ</div>
                    <div class="gia">3999.999đ</div></div>
                <div class="box_item row20"><img src="https://luxuryvip.vn/wp-content/uploads/2020/08/dien-thoai-vertu-signature-s-steel-2017-rubi-like-new.jpg" alt="">
                    <h3 class="mota">Đông hồ Rolex Nam cao cấp thụy sĩ</h3>
                
                    <div class="giasell">1900.000đ</div>
                    <div class="gia">3999.999đ</div></div>
                <div class="box_item row20"><img src="https://luxuryvip.vn/wp-content/uploads/2020/08/dien-thoai-vertu-signature-s-bentley-1-2017-like-new.jpg" alt="">
                    <h3 class="mota">Đông hồ Rolex Nam cao cấp thụy sĩ</h3>
                
                    <div class="giasell">1900.000đ</div>
                    <div class="gia">3999.999đ</div></div>
            </section>
   
            <!-- end contianer -->
            <div class="gach row"></div>