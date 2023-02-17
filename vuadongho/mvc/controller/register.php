<?php
class register extends controller {
    public $user;
    public function __construct() {
        $this->user = $this->model("user_model");
    }
    public function regUser() {
        $this->view_client("masterlayout", [
            "page" => "login/dangky",
        ]);
        if(isset($_POST['register'])) {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $username = $_POST['username'];
            $birthday = $_POST['birthday'];
            $avatar = $_POST['avatar'];
            $result = $this->user->regUser($username,$password,$fullname,$birthday,$address,$email,$phone,$avatar);
            if($result) {
                header("location: http://localhost/vuadongho/login");
            } else {
                echo "Đăng ký thất bại";
            }
        }
    }

}