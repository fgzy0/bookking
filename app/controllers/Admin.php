<?
namespace app\controllers;
use app\utils\Connect;
use mysqli;
use PDO;

class Admin{
    public static function addCategory(){
        $title = $_POST["title"];
        $description = $_POST["description"];
        $featured = $_POST["featured"];
        $active = $_POST["active"];

        $sqlInsert = "INSERT INTO `categories` (`id`, `title`, `description`, `featured`, `active`) VALUES(NULL, '$title', '$description', '$featured', '$active')";
        $queryInsert = mysqli_query(Connect::connectDB(), $sqlInsert);

        if(!$queryInsert){
            Info::sessionStart();
            $_SESSION["addCategoryError"] = "Ошибка создания новой категории";
            header("Location: /errors-page");
            die();
        }

        header("Location: /categories");
    }

    public static function selectCategory(){
        $sqlSelect = "SELECT * FROM `categories`";
        $querySelect = mysqli_query(Connect::connectDB(), $sqlSelect);

        if($querySelect == true){
            $count = mysqli_num_rows($querySelect);

            if($count > 0){
                while($rows = mysqli_fetch_assoc($querySelect)){
                    $id = $rows["id"];
                    $title = $rows["title"];
                    $description = $rows["description"];
                    $featured = $rows["featured"];
                    $active = $rows["active"];
                    ?>
                    <tbody>
                        <tr>
                        <td class="px-2"><? echo $id ?></td>
                        <td class="px-2"><? echo $title ?></td>
                        <td class="px-2"><? echo $description ?></td>
                        <td class="px-2"><? echo $featured ?></td>
                        <td class="px-2"><? echo $active ?></td>
                        <td class="space-x-5 px-2">
                            <button class="text-md bg-blue-500 rounded hover:bg-blue-700" type="submit"><a href="/reduct-category?id=<?echo $id?>">Редактировать</a></button>
                            <button class="text-md bg-red-500 rounded hover:bg-red-700" type="submit"><a href="/delete-category?id=<?echo $id?>">Удалить</a></button>
                        </td>
                        </tr>
                    </tbody>
                    <?
                }
            }
        }
    }


    public static function reductCategory($data){
        $id = $data["id"];
        $title = $data["title"];
        $description = $data["description"];
        $featured = $data["featured"];
        $active = $data["active"];

        $sqlUpdate = "UPDATE `categories` SET `title` = '$title', `description` = '$description', `featured` = '$featured', `active` = '$active' WHERE `id` = '$id'";
        $queryUpdate = mysqli_query(Connect::connectDB(), $sqlUpdate);

        if(!$queryUpdate){
            Info::sessionStart();
            $_SESSION["updateCategoryError"] = "Ошибка обновления категории. Повторите попытку";
            header("Location: /errors-page");
            die();
        }

        header("Location: /categories");
    }

    public static function deleteCategory($data){
        $id = $data["id"];

        $sqlDelete = "DELETE FROM `categories` WHERE `id` = '$id'";
        $queryDelete = mysqli_query(Connect::connectDB(), $sqlDelete);

        if(!$queryDelete){
            Info::sessionStart();
            $_SESSION["deleteCategoryError"] = "Ошибка удалении категории. Повторите попытку";
            header("Location: /errors-page");
            die();
        }

        header("Location: /categories");
    }

    public static function addProduct($file){
        $title = $_POST["title"];
        $author = $_POST["author"];
        $date = $_POST["date"];
        $description = $_POST["description"];
        $fullprice = $_POST["fullprice"];
        $discountprice = $_POST["discountprice"];
        $category = $_POST["category"];
        $pages = $_POST["pages"];
        $featured = $_POST["featured"];
        $active = $_POST["active"];
        if(isset($_FILES["img"]["name"])){
            $imageName = $_FILES["img"]["name"];
            
            if($imageName != ""){
                $ext = end(explode('.', $imageName));
                $imageName = "Product " . rand(0000, 9999) . "." . $ext;
                $src = $_FILES["image"]["tmp_name"];
                $dst = "png_files/products" . $imageName;
                $upload = move_uploaded_file($src, $dst);

                if($upload == false){
                    Info::sessionStart();
                    $_SESSION["imgProductError"] = "Ошибка загрузки изображения товара";
                    header("Location: /errors-page");
                }
            }
        }
        $sqlInsert = "INSERT INTO `products` SET
            `id` = NULL
            ";
        $queryInsert = mysqli_query(Connect::connectDB(), $sqlInsert);

        if($queryInsert == false){
            Info::sessionStart();
            $_SESSION["ProductError"] = "Ошибка добавления товара";
            header("Location: /errors-page");
            die();
        }

    }
}

?>