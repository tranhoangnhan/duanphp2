<?php
class product_model extends DB {
   
    public function getAllProduct(){
        $sql = "SELECT *, product.description as `des_product` FROM `product`
        INNER JOIN category 
        ON category.id_category = product.id_category
        ORDER BY id_product DESC";
        return mysqli_query($this->conn,$sql);
    }

    public function addProduct($product_name,$price,$price_sale,$product_image,
    $id_category,$description,$amount,$id_shop) {
        $sql = "
        INSERT INTO `product`
        ( `product_name`, `price`, `price_sale`,
         `product_image`, `id_category`, `description`, 
         `amount`, `id_shop`) 
         VALUES ('$product_name',$price,$price_sale,
         '$product_image',$id_category,'$description',$amount,
         $id_shop);";
        return mysqli_query($this->conn,$sql);

    }
    public function getProductbyId($id_product){
        $sql = "SELECT *, product.description as `des_product`, product.view as `view_product` FROM `product`
        INNER JOIN category 
        ON category.id_category = product.id_category
        WHERE id_product = $id_product;";
        return mysqli_query($this->conn,$sql);
    }
    public function editProduct($product_name,$price,$price_sale,
    $product_image,$id_category,$description,$amount,$id_product) {
        $sql = "
        UPDATE `product` 
        SET `product_name`='$product_name',
        `price`=$price,`price_sale`=$price_sale,
        `product_image`='$product_image',`id_category`=$id_category,
        `description`='$description',
        `amount`=$amount 
        WHERE id_product = $id_product;
        ";
        return mysqli_query($this->conn,$sql);
        
}
  public function deleteProduct($id_product) {
        $sql = "DELETE FROM `product` WHERE id_product = $id_product";
        return mysqli_query($this->conn,$sql);
    }
}
?>