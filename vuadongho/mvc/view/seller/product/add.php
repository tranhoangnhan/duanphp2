<div class="container-fluid">
            <form enctype="multipart/form-data" action="" method="post">
                <table class="table table-striped-columns">
                    <tr>
                        <td>Tên sp</td>
                        <td><input type="text" name="product_name"></td>
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
                        <td><input  type="file" name="fileupload" id=""></td>
                    </tr>
                   
                    <tr>
                        <td>Giá:</td>
                        <td><input type="text" name="price"></td>
                    </tr>
                    <tr>
                        <td>Giá sale:</td>
                        <td><input type="text" name="price_sale"></td>
                    </tr>
                    <tr>
                        <td>Nhập số lượng</td>
                        <td><input type="number" name="amount" id=""></td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td><textarea name="description" cols="30" rows="5" class="form-control ckeditor"></textarea></td>
                    </tr>
                </table>
                <button type="submit" name="add_product" class="btn btn-primary">Thêm sản phẩm</button>
            </form>
          </div>
        </div>
        <!-- End of Main Content -->
