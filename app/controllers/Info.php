<?
namespace app\controllers;
use app\utils\Connect;
use mysqli;

class Info{
    public static function sessionStart(){
        session_start();
    }

    public static function sessionDestroy(){
        session_destroy();
    }

    public static function selectInfo(){
        $sql = "SELECT * FROM `users`";
        $selectQuery = mysqli_query(Connect::connectDB(), $sql);

        if($selectQuery == true){
            $count = mysqli_num_rows($selectQuery);

            if($count > 0){
                while($rows = mysqli_fetch_assoc($selectQuery)){
                    $id = $rows["id"];
                    $username = $rows["username"];
                    $email = $rows["email"];
                    $phoneNumber = $rows["phonenum"];
                    $fio = $rows["surname"] . ' ' . $rows["name"] . ' ' . $rows["fathname"];
                    $birthDay = $rows["birthdate"];
                    $role = $rows["role"];
                    ?>
                    <tbody>
                        <tr>
                        <td class="px-2"><? echo $id ?></td>
                        <td class="px-2"><? echo $username ?></td>
                        <td class="px-2"><? echo $email ?></td>
                            <?
                            if($phoneNumber != ""){
                                ?>
                                <td class="px-2"><? echo $phoneNumber ?></td>
                                <?
                            }else{
                                ?>
                                <td class="px-2">Номер не указан</td>
                                <?
                            }
                            if($rows["surname"] != "" || $rows["name"] != "" || $rows["fathname"] != ""){
                                ?>
                                <td class="px-2"><? echo $fio ?></td>
                                <?
                            }else{
                                ?>
                                <td class="px-2">ФИО не указано</td>
                                <?
                            }
                            if($birthDay != ""){
                                ?>
                                <td class="px-2"><? echo $birthDay ?></td>
                                <?
                            }else{
                                ?>
                                <td class="px-2">Номер не указан</td>
                                <?
                            }?>
                        <td class="px-2"><? echo $role ?></td>
                        <td class="space-x-5 px-2">
                            <button class="text-md bg-blue-500 rounded hover:bg-blue-700" type="submit"><a href="/reduct-user?id=<?echo $id?>">Редактировать</a></button>
                            <button class="text-md bg-red-500 rounded hover:bg-red-700" type="submit"><a href="/delete-user?id=<?echo $id?>">Удалить</a></button>
                        </td>
                        </tr>
                    </tbody>
                    <?
                }
            }
        }
    }


    public static function reductUser($data){
        $id = $data["id"];
        $email = $data["email"];
        $username = $data["username"];
        $birthDate = $data["birthdate"];
        $phoneNumber = $data["phonenumber"];
        $role = $data["role"];
        

        $sqlSelect = "SELECT * FROM `users` WHERE `email` = '$email'";
        $querySelect = mysqli_query(Connect::connectDB(), $sqlSelect);
        $users = mysqli_fetch_assoc($querySelect);

        if($users["email"] === $email){
            self::sessionStart();
            $_SESSION["emailError"] = "На данный Email уже зарегистрирован пользователь. Попробуйте еще раз";
            header("Location: /errors-page");
            die();
        }

        $sqlUpdate = "UPDATE `users` SET `email` = '$email', `username` = '$username', `birthdate` = '$birthDate', `phonenum` = '$phoneNumber', `role` = '$role' WHERE `id` = '$id'";
        $queryupdate = mysqli_query(Connect::connectDB(), $sqlUpdate);
        if (!$queryupdate){
            self::sessionStart();
            $_SESSION["updateUserError"] = "Ошибка обновления данных пользователя";
            header("Location: /errors-page");
            die();
        }else{
            self::sessionStart();
            $_SESSION["updateUser"] = "Email успешно обновлен";
            header("Location: /manage-admin");
        }
    }

    public static function deleteUser($data){
        $id = $data['id'];
        $delete = "DELETE FROM `users` WHERE `id` = '$id'";
        $queryDelete = mysqli_query(Connect::connectDB(), $delete);
        if(!$queryDelete){
            self::sessionStart();
            $_SESSION['deleteError'] = "Ошибка удаления пользователя. Попробуйте еще раз";
            header("Location: /errors-page");
        }else{
            self::sessionStart();
            $_SESSION['deleteSuccess'] = "Пользователь успешно удален";
            header("Location: /manage-admin");
        }
    }

    public static function registerUser(){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $name = '';
        $surName = '';
        $fathName = '';
        $phoneNumber = '';

        $sqlSelect = "SELECT * FROM `users` WHERE `email` = '$email'";
        $selectQuery = mysqli_query(Connect::connectDB(), $sqlSelect);
        $users = mysqli_fetch_assoc($selectQuery);
        
        if($users["email"] === $email){
            self::sessionStart();
            $_SESSION["emailError"] = "На данный Email уже зарегистрирован пользователь. Попробуйте еще раз";
            header("Location: /errors-page");
            die();
        }

        $sqlInsert = "INSERT INTO `users` (`id`, `email`, `username`, `password`, `name`, `surname`, `fathname`, `phonenum`) VALUES(NULL, '$email', '$username', '$password', '$name', '$surName', '$fathName', '$fathName')";
        $insertQuery = mysqli_query(Connect::connectDB(), $sqlInsert);

        if(!$insertQuery){
            self::sessionStart();
            $_SESSION["registerError"] = "Ошибка регистрации нового пользователя. Попробуйте еще раз";
            header("Location: /errors-page");
            die();
        }

        header("Location: /");
    }


    public static function authInSession($data){
        $email = $data["email"];
        $password = $data["password"];

        $sqlSelect = "SELECT * FROM `users` WHERE `email` = '$email'";
        $selectQuery = mysqli_query(Connect::connectDB(), $sqlSelect);
        $users = mysqli_fetch_assoc($selectQuery);

        if(!$users){
            self::sessionStart();
            $_SESSION["authEmailUnCorrect"] = "На данный Email не зарегистрирован пользователь. Повторите попытку.";
            header("Location: /errors-page");
        }

        if($users["email"] === $email && $users["password"] === $password){
            self::sessionStart();
            $_SESSION["user"] = [
              "id" => $users["id"],
              "username" => $users["username"],
              "email" => $users["email"],
              "password" => $users["password"],
              "name" => $users["name"],
              "surname" => $users["surname"],
              "fathname" => $users["fathname"],
              "phonenum" => $users["phonenum"],
              "birthdate" => $users["birthdate"],
              "role" => $users["role"],
              "avatar" => $users["avatar"]
            ];
            header("Location: /");
        }else{
            self::sessionStart();
            $_SESSION["authErrorPass"] = "Вы ввели неправильный пароль. Повторите попытку.";
            header("Location: /errors-page");
        }
    }

    public static function destroySession(){
        self::sessionStart();
        self::sessionDestroy();
        header("Location: /");
    }

    public static function updateAvatar($data, $file){
        $id = $data["id"];
        $file = $_FILES["file"];
        $filename = microtime() . $file["name"];
        $uploadDir = 'png_files/avatars/';
        $path = $uploadDir . $filename;
        $update = "UPDATE `users` SET `avatar` = '$filename' WHERE `id` = '$id'";
        $avatarQuery = mysqli_query(Connect::connectDB(), $update);
        if(!$avatarQuery){
            echo "Ошибка";
        }

        if(!move_uploaded_file($file["tmp_name"], $path)){
            self::sessionStart();
            $_SESSION["avatarUpdateError"] = "Ошибка загрузки нового аватара. Повторите попытку.";
            header("Location: /errors-page");
        }else{
            self::sessionStart();
            self::sessionDestroy();
            header("Location: /");
        }
    }

    public static function updateUser2($data){
        $id = $data["id"];
        $phoneNumber = $data["phonenum"];
        $username = $data["username"];

        $selectPhonenum = "SELECT * FROM `users` WHERE `phonenum` = '$phoneNumber'";
        $phonenumQuery = mysqli_query(Connect::connectDB(), $selectPhonenum);
        $phonenumUser = mysqli_fetch_assoc($phonenumQuery);

        $selectUsername = "SELECT * FROM `users` WHERE `username` = '$username'";
        $usernameQuery = mysqli_query(Connect::connectDB(), $selectUsername);
        $usernameUser = mysqli_fetch_assoc($usernameQuery);

        if($phonenumUser["phonenum"] === $phoneNumber){
            self::sessionStart();
            $_SESSION["updateNumberError"] = "Данный номер телефона уже используется другим пользователем. Повторите попытку";
            header("Location: /errors-page");
        }else{
            $sqlUpdate = "UPDATE `users` SET `username` = '$username' WHERE `id` = '$id'";
            $updateQuery = mysqli_query(Connect::connectDB(), $sqlUpdate);

            if(!$updateQuery){
                self::sessionStart();
                $_SESSION["updateUser"] = "Ошибка обновления. Повторите попытку";
                header("Location: /errors-page");
            }
            self::sessionStart();
            self::sessionDestroy();
            header("Location: /");
            die();
        }

        if($usernameUser["username"] === $username){
            self::sessionStart();
            $_SESSION["updateUsernameError"] = "Данный псевдоним пользователя уже используется другим пользователем. Повторите попытку";
            header("Location: /errors-page");
        }else{
            $sqlUpdate = "UPDATE `users` SET `phonenum` = '$phoneNumber' WHERE `id` = '$id'";
            $updateQuery = mysqli_query(Connect::connectDB(), $sqlUpdate);

            if(!$updateQuery){
                self::sessionStart();
                $_SESSION["updateUser"] = "Ошибка обновления. Повторите попытку";
                header("Location: /errors-page");
            }
            self::sessionStart();
            self::sessionDestroy();
            header("Location: /");
            die();
        }

        $sqlUpdate = "UPDATE `users` SET `phonenum` = '$phoneNumber', `username` = '$username' WHERE `id` = '$id'";
        $updateQuery = mysqli_query(Connect::connectDB(), $sqlUpdate);

        if(!$updateQuery){
            self::sessionStart();
            $_SESSION["updateUser"] = "Ошибка обновления. Повторите попытку";
            header("Location: /errors-page");
        }
        self::sessionStart();
        self::sessionDestroy();
        header("Location: /");
    }
}
?>