<?php

class seller extends controller

{

    var $title = 'Trang chủ';

  

    public $product;
    public $category;

    public function __construct()

    {

       $this->product = $this->model("product_model");
       $this->category = $this->model("category_model");


        // $this->timkiem_model = $this->model("timkiem_model");

    }

    public function product()

    {

        $this->view_seller("masterlayout", [

            "page" => "home/index",

        ]);

    }
    public function home()

    {

        $this->view_seller("masterlayout", [

            "page" => "home/index",

        ]);

    }
    public function product_list()

    {

        $this->view_seller("masterlayout", [
            "product" => $this->product->getAllProduct(),
            "page" => "product/index",

        ]);

    }
    public function product_add(){
            
        if(isset($_POST['add_product'])) {
            $this->upanh();
            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $price_sale = $_POST['price_sale'];
            $product_image = basename( $_FILES["fileupload"]["name"]);
            $id_category = $_POST['category'];
            $description = $_POST['description'];
            $amount = $_POST['amount'];
            // $id_shop = $_SESSION['id_shop'];
            $id_shop = 2;
            $result = $this->product->addProduct($product_name,$price,$price_sale,$product_image,
            $id_category,$description,$amount,$id_shop);
          
         
        } 
        
      

            $this->view_seller("masterlayout", [
            "category" => $this->category->getAllCategory(),
               
                "page" => "product/add",
    
            ]);
    
    }
    public function product_edit($id_product)

    {

        $this->view_seller("masterlayout", [
            "product" => $this->product->getProductbyId($id_product),
            "category" => $this->category->getAllCategory(),
            "page" => "product/edit",

        ]);

    }

    public function product_update($id_product) {

        if(isset($_POST['edit_product'])) {
            $this->upanh();
            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $price_sale = $_POST['price_sale'];
            $product_image = basename( $_FILES["fileupload"]["name"]);
            $id_category = $_POST['category'];
            $description = $_POST['description'];
            $amount = $_POST['amount'];
        $result = $this->product->editProduct($product_name,$price,$price_sale,
        $product_image,$id_category,$description,$amount,$id_product);
        }
        $this->view_seller("masterlayout", [
            "product" => $this->product->getProductbyId($id_product),
            "category" => $this->category->getAllCategory(),
            "page" => "product/edit",

        ]);
     

    }
    
    public function product_delete($id_product)

    {
        $this->view_seller("masterlayout", [
            "delete" => $this->product->deleteProduct($id_product),
            "page" => "product/index",
            "product" => $this->product->getAllProduct(),

        ]);


    }

}