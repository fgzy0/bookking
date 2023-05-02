<?
namespace app\utils;
class Connect{
    public static function connectDB(){

        $db = mysqli_connect(
            "127.0.0.1:3306",
            "root",
            "1234",
            "BookKing"
        );

        if(!$db){
            die("нет подключения к бд");
        }else{
            return $db;
        }
    }
}
?>