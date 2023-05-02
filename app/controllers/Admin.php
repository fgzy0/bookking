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

    public static function addProduct(){
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
        $genre = $_POST["genre"];
        
        $file = $_FILES["img"];
        $filename = microtime() . $file["name"];
        $upload = 'png_files/products/';
        $path = $upload . $filename;
        if(!move_uploaded_file($file["tmp_name"], $path)){
            Info::sessionStart();
            $_SESSION["ImgProductError"] = "Ошибка загрузки изображения товара";
            header("Location: /errors-page");
        }

        $sqlInsert = "INSERT INTO `products` (`id`, `title`, `author`, `category_id`, `price-discount`, `price-full`, `description`, `date`, `pages-quantity`, `featured`, `active`, `img`, `genre`) VALUES(NULL, '$title', '$author', '$category', '$discountprice', '$fullprice', '$description', '$date', '$pages', '$featured', '$active', '$filename', '$genre')";
        $queryInsert = mysqli_query(Connect::connectDB(), $sqlInsert);

        if($queryInsert == false){
            Info::sessionStart();
            $_SESSION["ProductError"] = "Ошибка добавления товара";
            header("Location: /errors-page");
            die();
        }
        header("Location: /products");
    }

    public static function selectProducts(){
        $sqlSelect = "SELECT * FROM `products`";
        $querySelect = mysqli_query(Connect::connectDB(), $sqlSelect);

        if(!$querySelect){
            echo "Ошибка получения данных";
        }

        $count = mysqli_num_rows($querySelect);
        if($count > 0){
            while($rows = mysqli_fetch_assoc($querySelect)){
                $id = $rows["id"];
                $title = $rows["title"];
                $author = $rows["author"];
                $category = $rows["category_id"];
                $discountprice = $rows["price-discount"];
                $fullprice = $rows["price-full"];
                $description = $rows["description"];
                $date = $rows["date"];
                $pages = $rows["pages-quantity"];
                $img = $rows["img"];
                $featured = $rows["featured"];
                $active = $rows["active"];
                $genre = $rows["genre"];
                ?>
                <tbody>
                    <tr>
                        <td class="px-2 text-center"><?=$id ?></td>
                        <td class="px-2 text-center"><? echo $title ?></td>
                        <td class="px-2 text-center"><? echo $author ?></td>
                        <td class="px-2 text-center"><? echo $category ?></td>
                        <td class="px-2 text-center"><? echo $discountprice ?></td>
                        <td class="px-2 text-center"><? echo $fullprice ?></td>
                        <td class="px-2 text-center"><? echo $genre ?></td>
                        <td class="px-2 text-center"><? echo $date ?></td>
                        <td class="px-2 text-center"><? echo $pages ?></td>
                        <td class="px-2 text-center py-2"><img class="w-25 h-40" src="/png_files/products/<?=$img ?>"></td>
                        <td class="px-2 text-center"><? echo $featured ?></td>
                        <td class="px-2 text-center"><? echo $active ?></td>
                        <td class="space-y-2 px-2">
                            <button class="text-md bg-blue-500 rounded hover:bg-blue-700" type="submit"><a href="/reduct-product?id=<?echo $id?>">Редактировать</a></button>
                            <button class="text-md bg-red-500 rounded hover:bg-red-700" type="submit"><a href="/delete-product?id=<?echo $id?>">Удалить</a></button>
                        </td>
                    </tr>
                </tbody>
                <?
            }

        }
    }

    public static function updateProduct($data){
        $id = $data["id"];
        $file = $_FILES["img"];
        $title = $data["title"];
        $author = $data["author"];
        $date = $data["date"];
        $description = $data["description"];
        $fullprice = $data["price-full"];
        $discountprice = $data["discount-price"];
        $category = $data["category"];
        $pages = $data["pages"];
        $featured = $data["featured"];
        $active = $data["active"];
        $genre = $data["genre"];
        
        if(isset($_FILES["img"]["name"])){
            $filename = microtime() . $file["name"];
            $upload = 'png_files/products/';
            $path = $upload . $filename;
            if(!move_uploaded_file($file["tmp_name"], $path)){
                Info::sessionStart();
                $_SESSION["ImgProductError"] = "Ошибка загрузки изображения товара";
                header("Location: /errors-page");
            }
        }else{
            $filename = $file;
        }


        $sqlUpdate = "UPDATE `products` SET `title` = '$title',  `author` = '$author',  `category_id` = '$category',  `price-discount` = '$discountprice',  `price-full` = '$fullprice',  `description` = '$description',  `date` = '$date',  `pages-quantity` = '$pages',  `featured` = '$featured',  `active` = '$active', `img` = '$filename', `genre` = '$genre' WHERE `id` = '$id'";
        $queryUpdate = mysqli_query(Connect::connectDB(), $sqlUpdate);

        if(!$queryUpdate){
            echo "Ошибка обновления товара";
            die();
        }
        header("Location: /products");
    }

    public static function deleteProduct($data){
        $id = $data["id"];

        $sqlDelete = "DELETE FROM `products` WHERE `id` = '$id'";
        $queryDelete = mysqli_query(Connect::connectDB(), $sqlDelete);

        if(!$queryDelete){
            Info::sessionStart();
            $_SESSION["deleteCategoryError"] = "Ошибка удалении товара. Повторите попытку";
            header("Location: /errors-page");
            die();
        }

        header("Location: /products");
    }
}

?>