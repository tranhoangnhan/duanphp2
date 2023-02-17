<?php
class product_model extends DB {
    public function getAllProduct(){
       $sql =  $this->select_filter('*, product.description as `des_product`','product 
        INNER JOIN category 
        ON category.id_category = product.id_category
        ORDER BY id_product DESC');
        return $this->execute($sql);
    }
    public function addProduct($product_name,$price,$price_sale,$product_image,
    $id_category,$description,$amount,$id_shop) {
        $sql = $this->add_filter('product', 'product_name, price, price_sale,
        product_image, id_category, description, 
        amount, id_shop'  , "'$product_name',$price,$price_sale,
        '$product_image',$id_category,'$description',$amount,
        $id_shop");
        return $this->execute($sql);

    }
  
    public function getProductbyId($id_product){
        $sql = $this->select_filter('*, product.description as `des_product`',"product  INNER JOIN category 
        ON category.id_category = product.id_category
        WHERE id_product = $id_product
        "
    );
        return $this->execute($sql);
    }
    public function editProduct($product_name,$price,$price_sale,
    $product_image,$id_category,$description,$amount,$id_product) {
        $sql = $this->update_filter('product' ,

         "`product_name`='$product_name',
        `price`=$price,`price_sale`=$price_sale,
        `product_image`='$product_image',`id_category`=$id_category,
        `description`='$description',
        `amount`=$amount " , 
        
        "id_product = $id_product" );
     
        return $this->execute($sql);
        
}
  public function deleteProduct($id_product) {
        $sql = $this->delete_filter('product',"id_product = $id_product");
        return $this->execute($sql);
    }
    public function countProduct() {
        $sql = $this->count('id_product','product');
        return $this->execute($sql);
    }
}
   
?>