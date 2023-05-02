<?
namespace app\utils;

class Router{
    public static $listpage = [];

    public static function myGet($uri, $namePage) {
        self::$listpage[] = [
            "uri" => $uri,
            "pages" => $namePage
        ];
    }

    public static function myPost($uri, $controller, $method, $data, $file){
        self::$listpage[] = [
            "uri" => $uri,
            "class" => $controller,
            "method" => $method,
            "data" => $data,
            "file" => $file,
            "post" => true
        ];
    }

    public static function getContent(){
        $myQ = $_GET["q"];
        foreach(self::$listpage as $val){
            if($val["uri"] == '/' . $myQ){
                if($_SERVER["REQUEST_METHOD"] === "POST" && $val["post"] === true){
                    switch($val["method"]){
                        case 'reductUser':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'deleteUser':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'registerUser':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'authInSession':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'destroySession':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'updateAvatar':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST, $_FILES);
                            die();
                        case 'updateUser2':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'addCategory':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'reductCategory':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'deleteCategory':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'addProduct':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'updateProduct':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        case 'deleteProduct':
                            $action = new $val["class"];
                            $method = $val["method"];
                            $action -> $method($_POST);
                            die();
                        }
                }else{
                    require_once "views/pages/" . $val["pages"] . '.php';
                }
            }
        }
    }
}

?>