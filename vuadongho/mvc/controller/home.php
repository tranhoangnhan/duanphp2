<?php

class home extends controller

{

    var $title = 'Trang chủ';

  

    public $product;

    public function __construct()

    {

       $this->product = $this->model("product_model");

        // $this->timkiem_model = $this->model("timkiem_model");

    }

    public function product()

    {

        $this->view_client("masterlayout", [

            "page" => "home/index",

        ]);

    }

    public function shop_page() {
        $this->view_client("masterlayout", [
            "product" => $this->product->getAllProduct(),
            "page" => "category/index",

        ]);
    }
  
 
    public function product_details($id_product) {
        $this->view_client("masterlayout", [
            "page" => "product/details",
            "product" => $this->product->getProductbyId($id_product),
        ]);
    }
  
}