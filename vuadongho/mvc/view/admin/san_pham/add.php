<h3>
  <?= $data['title'] ?>

</h3>
<?= $data['thong_bao'] ?>

<form action="" enctype="multipart/form-data" method="POST">
  <table class="table table-bordered">
    <tr>
      <th>Tên sản phẩm</th>
      <th>Gía</th>
      <th>Gía khuyến mãi</th>
      <th>Số lượng</th>
      <th>Hình sản phẩm</th>
      <th>Loại</th>
      <th>Ngày nhập</th>

    </tr>
    <tr>
      <td><input class="form-control" type="text" name="ten_sp" required	></td>
      <td><input class="form-control" type="number" name="gia" required	 min="0"></td>
      <td><input class="form-control" type="number" name="gia_km" required	 min="0"></td>
      <td><input class="form-control" type="number" name="so_luong" required	 min="1"></td>

      <td><input class="form-control" type="file" name="fileupload" id="fileupload" required	></td>
      <td>
      <select name="ma_loai" id="">
          <?php while($loai = mysqli_fetch_array($data["loai"])) { ?>
          <option value="<?php echo $loai['ma_loai']; ?>">
          <?php echo $loai['ten_loai']; ?>
            </option>
            <?php  } ?>
          </select> 

      </td>
      <td><input class="form-control" type="date" name="ngay_nhap" required	></td>


    </tr>
 <td colspan = "7">
    <label for="">Mô tả</label>  
    <textarea name="mo_ta" class="form-control ckeditor"  cols='12' rows='12' id="" required	></textarea></td>


  </table>
  <div class="botton">
    <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
    <button type="button" class="btn btn-success">Nhập Lại</button>

    <a href="/mvcda1/san_pham/show"><button type="button" class="btn btn-success">Danh Sách</button></a>
  </div>
</form>
