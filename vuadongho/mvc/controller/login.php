<?php
class login extends controller

{
    public $user;

    public function __construct()
    {
        $this->user = $this->model("user_model");
    }
   
    public function login()
    {
        $this->view_client("masterlayout", [
            "page" => "login/index",
        ]);
        if(isset($_POST['login']))  {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result =$this->user->getUserbyEmail($email);
            if(mysqli_num_rows($result)) {

                while ($row = mysqli_fetch_array($result)) {

                    $id = $row["id_account"];
                    $email_db = $row["email"];
                    $password_db = $row["password"];
                    $role = $row["role"];
                    
                }
                if($email == $email_db && $password == $password_db) {
                    $_SESSION['id'] = $id;
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = $role;
                    if($role == 1) {
                        header("location: http://localhost/vuadongho/seller");
                    } else {
                        header("location: http://localhost:8080/PHP/PHP_MVC/index.php?controller=seller&action=home");
                    }
                } else {
                    echo "Sai mật khẩu";
                }
        }
        
    }
}
}