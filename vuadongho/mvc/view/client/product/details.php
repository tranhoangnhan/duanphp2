<?php $product = mysqli_fetch_assoc($data['product']);   ?>

<div class="gach1 "></div>
        <div class="container_chitietsp row ">
            <div class="container_chitietsp_header">
                <a href="">Trang chủ </a>/
                <a href="">Casio </a>/
                <a href="">Đồng hồ </a>/
                <a href="" class="namesp">Đồng Hồ Casio Nam MTP-1374L-1AVDF Màu Đen</a>
            </div>

            <div class="container_chitietsp_main  ">
                <div class="container_chitietsp_box_left box">
                    <div class="container_chitietsp_anh">
                        <img src="upload/<?=$product['product_image']?>" alt="">
                    </div>
                    
                    <div class="container_chitietsp_slide">
                       <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" class="anh_slide" alt="">
                       <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" class="anh_slide" alt="">
                       <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" class="anh_slide" alt="">
                       <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" class="anh_slide" alt="">
                    </div>
                </div>
                <div class="container_chitietsp_box_center ">
                   <div class="container_name_danhmuc">
                        Rolex
                    </div>
                    <div class="container_namesp">
                       <h1> <?=  $product['product_name'] ?></h1>
                       <span>Danh mục:</span><a href="" class="mr15"> <?=  $product['category_name'] ?></a>
                       <span>Mã SP</span><a href="" class="mr15"> <?=  $product['id_product'] ?></a> 
                       <span><i class="fa fa-eye" aria-hidden="true"></i></span><a href="">(<?=  $product['view_product'] ?>)</a>
                    </div>
                    <div class="container_price">
                        <div class="container_price_new">
                        <?=  currency_format($product['price'])  ?>
                        </div>
                        <div class="container_price_old">
                          <?=currency_format($product['price_sale'])?>
                        </div>
                    </div>


                    <div class="box_hiden row_hiden">
                        <div class="title_hiden">Máy:</div>
                        <div class="main_hiden">Máy Quartz</div>
                        
                    </div>
                    <div class="box_hiden row_hiden">
                        <div class="title_hiden">Giới tính:</div>
                        <div class="main_hiden">Nam</div>
                        
                    </div>

                    <div class="box_hiden row_hiden">
                        <div class="title_hiden">Màu sắc:</div>
                        <div class="main_hiden">Đen</div>
                        
                    </div>

                    <div class="box_hiden row_hiden">
                        <div class="title_hiden">Ưu đãi:</div>
                        <div class="main_hiden phone">
                            Freeship Hà Nội & HCM <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:black"></i></div>
                        
                    </div>

                    <div class="box_hiden row_hiden">
                        <div class="title_hiden">Gọi đặc mua:</div>
                        <div class="main_hiden phone">093.934.8888 (7:30 - 22:00)</div>
                        
                    </div>

                   
                    <div class="guop_button">
                       <button ><a href="./gohang.html">THÊM VÀO GIỎ</a> </button>
                       <button>MUA NGAY</button>

                    </div>
                   
                </div>
                    <div class="container_chitietsp_box_right box ">
                       <span class="mrl15" > SẢN PHẢM CÙNG LOẠI</span>
                       <div class="sp_lienquan">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                            <div class="namesp_lienquan">Đồng hồ adsasádassddsssssssdđs</div>
                       </div>

                       <div class="sp_lienquan">
                        <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                        <div class="namesp_lienquan">Đồng hồ adsasádassddsssssssdđs</div>
                     </div>
                  
                        
                     
                     <div class="sp_lienquan">
                        <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                        <div class="namesp_lienquan">Đồng hồ adsasádassddsssssssdđs</div>
                   </div>
                  

                   <div class="sp_lienquan">
                    <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                    <div class="namesp_lienquan">Đồng hồ adsasádassddsssssssdđs</div>
               </div>
               

                <div class="sp_lienquan">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                            <div class="namesp_lienquan">Đồng hồ adsasádassddsssssssdđs</div>
                 </div>

                 <div class="sp_lienquan">
                    <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                    <div class="namesp_lienquan">Đồng hồ adsasádassddsssssssdđs</div>
                </div>
                <div class="sp_lienquan">
                    <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                    <div class="namesp_lienquan">Đồng hồ adsasádassddsssssssdđs</div>
                </div>
                
                      




                       <div class="sp_lienquan">
                        <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                        <div class="namesp_lienquan">ĐỒNG HỒ ROLádasdEXÁDASDASD</div>
                   </div>

                   <div class="sp_lienquan">
                    <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                    <div class="namesp_lienquan">ĐỒNG HỒ ROLEXÁDASDASD</div>
                    </div>

                    <div class="sp_lienquan">
                    <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2023/02/dong-ho-nam-seiko-essentials-quartz-silver-dial-men-s-watch-sur430-mau-bac-63dcbf50a2bab-03022023150120.jpg" alt="">
                    <div class="namesp_lienquan">ĐỒNG HỒ ROLEXÁDASDASD</div>
                    </div>



                    </div>
                </div>

            </div>
        </div>
    <!-- <h1 class="text-ss1 row">
        <i class="fa fa-chevron-right" aria-hidden="true"></i> HÀNG HIỆU <strong> BÁN CHẠY</strong> 
    </h1> -->
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

        <div class="gach row"></div>