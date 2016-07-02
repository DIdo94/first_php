
<?php
include_once "C:\\xampp\\htdocs\\IDK\\config\\dbConfig.php";
include_once "C:\\xampp\\htdocs\\IDK\\DB\\database.php";
class Requester {
    static $conn;

    public static function login() {

        $name=$age="";
        self::$conn = \DB\DBConnect::instance();
        $statement=self::$conn->prepare("SELECT  Name,Age from users where NAME=? AND PASSWORD=?");
        $statement->bind_param('si',$_POST['fname'],$_POST['pass']);
        $isOK= $statement->execute();
        if($isOK) {
            $statement->bind_result($name,$age);
            $is=$statement->fetch();
            if(isset($name)){
                $_SESSION['name']=$_POST['fname'];
                $_SESSION['modal-action']='Login';
                $_SESSION['login-message']='<span class="alert alert-success">Successfully logged!</span>';

            }
            else {
                $_SESSION['login-message']='<span class="alert alert-danger">Not Successfully logged!</span>';

            }
            include_once FILE_PATH.'\\Views\\modal.php';
            unset($_POST['fname']);
            unset($_POST['pass']);
        }
    }

    public static function register() {
        self::$conn = \DB\DBConnect::instance();
        $statement=self::$conn->prepare("INSERT INTO users(Name,Password,Age) VALUES (?,?,?)");
        $statement->bind_param('sii',$_POST['fname'],$_POST['password'],intval($_POST['age']));

        $isOK= $statement->execute();
        $_SESSION['modal-action']=' Register';
        if($isOK) {

            $_SESSION['register-message']='<span class="alert alert-success">Successfully registered!</span>';

        }
        else {
            $_SESSION['register-message']='<span class="alert alert-danger">Not Successfully registered!</span>';
        }

        include_once FILE_PATH.'\\Views\\modal.php';

    }

    public static function logout() {
        $_SESSION['logout']=true;
        $_SESSION['modal-action']="Logout";
        $_SESSION['login-message']='<span class="alert alert-success">Successfully logged out!</span>';
        include_once FILE_PATH.'\\Views\\modal.php';
    }
}
