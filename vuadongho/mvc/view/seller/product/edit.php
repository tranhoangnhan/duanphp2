<div class="container-fluid">
<?php $product = mysqli_fetch_array($data['product']) ?>

            <form enctype="multipart/form-data" action="seller/product_update/<?=$product['id_product']?>" method="post">
                <table class="table table-striped-columns">
                    <tr>
                        <td>Tên sp</td>
                        <td><input type="text" name="product_name" value="<?=$product['product_name']?>"></td>
                    </tr>
                    <tr>
                        <td>Loại sp:</td>
                        <td>

                           
                            <select name="category" id="">
                            <?php while($category = mysqli_fetch_array($data["category"])) { ?>
          <option value="<?php echo $category['id_category']; ?>">
          <?php echo $category['category_name']; ?>
            </option>
            <?php  } ?>
          </select> 

                       
                        </td>
                    </tr>
        
                    <tr>
                        <td>Hình ảnh</td>
                        <td>
                        <img src="upload/<?=$product['product_image']?>" alt="" width="80" />    
                        <input  type="file" name="fileupload" id=""></td>
                        <tr>
                      

                    </tr>
                    </tr>
                    <tr>
                        <td>Giá:</td>
                        <td><input type="text" name="price" value="<?=$product['price']?>"></td>
                      

                    </tr>
                    <tr>
                    <td>Giá sale:</td>
                    
                    <td><input type="text" name="price_sale" value="<?=$product['price_sale']?>"></td>
                    </tr>
                    <tr>
                        <td>Nhập số lượng</td>
                        <td><input type="number" name="amount" id="" value="<?=$product['amount']?>"></td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td><textarea name="description" cols="30" rows="5" class="form-control ckeditor"><?=$product['des_product']?></textarea></td>
                    </tr>
                </table>
                <button type="submit" name="edit_product" class="btn btn-primary">Sửa sản phẩm</button>
            </form>
          </div>
        </div>
        <!-- End of Main Content -->