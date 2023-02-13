
<div class="container-fluid">
            <table class="table table-striped-columns text-center">
              <thead>
                <tr>
                  <th>Mã sp</th>
                  <th>Tên sp</th>
                  <th>Loại sp</th>
                  <th>Ảnh</th>
                  <th>Giá</th>
                  <th>Giá khuyến mãi</th>
                  <th>Số lượng</th>
                  <th>Mô tả</th>
                  <th>Tác vụ</th>
                </tr>
              </thead>
              <tbody>
                <?php  while($product = mysqli_fetch_array($data['product'])) { ?>
                <tr>
                  <td><?=$product['id_product']?></td>
                  <td><?=$product['product_name']?></td>
                  <td><?=$product['category_name']?></td>
                  <td><img src="upload/<?=$product['product_image']?>" alt="" width="80" /></td>
                  <td><?=currency_format($product['price']) ?></td>
                  <td><?=currency_format($product['price_sale']) ?></td>
                  <td><?=$product['amount']?></td>
                  <td><?=$product['des_product']?></td>
                  <td><a href="seller/product_edit/<?=$product['id_product']?>">Sửa</a> | <a href="seller/product_delete/<?=$product['id_product']?>">Xóa</a></td>
                </tr>
                <?php  } ?>
              </tbody>
            </table>
          </div>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <!-- /.container-fluid -->
          <nav aria-label="Page navigation example" style="padding-left: 2%;">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
        <!-- End of Main Content -->
