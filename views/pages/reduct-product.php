<?

use app\utils\Connect;

require_once("views/pages/admin/parts/admin-header.php");

$id = $_GET["id"];
$sql = "SELECT * FROM `products` WHERE `id` = '$id'";
$updateQuery = mysqli_query(Connect::connectDB(), $sql);
$updateQuery = mysqli_fetch_assoc($updateQuery);
?>
<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="text-black dark:text-white w-[500px] mx-[550px]">
        <h1 class="text-3xl">Редактирование продукта: <?=$updateQuery["title"]?></h1>
        <form action="/reductproduct" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$updateQuery["id"]?>">
            <input type="hidden" name="img" value="<?$updateQuery["img"]?>">
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="title">Название:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="title" value="<?=$updateQuery["title"]?>">
                </div>
                <div class="w-[200px]">
                    <label for="author">Автор:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="author" value="<?=$updateQuery["author"]?>">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="date">Дата выпуска:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="date" name="date" value="<?=$updateQuery["date"]?>">
                </div>
                <div class="w-[200px]">
                    <label for="description">Описание:</label>
                    <textarea class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="description"><?=$updateQuery["description"]?></textarea>
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="price-full">Полная цена:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="number" name="price-full" value="<?=$updateQuery["price-full"]?>">
                </div>
                <div class="w-[200px]">
                    <label for="discount-price">Цена со скидкой:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="number" name="discount-price" value="<?=$updateQuery["price-discount"]?>">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="category">Категория:</label>
                    <select class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" name="category">
                        <?
                        $sqlSelect = "SELECT * FROM `categories` WHERE `active` = 'Да'";
                        $querySelect = mysqli_query(Connect::connectDB(), $sqlSelect);
                        $count = mysqli_num_rows($querySelect);
                        if($count > 0){
                            while($category = mysqli_fetch_assoc($querySelect)){
                                $id = $category["id"];
                                $title = $category["title"];

                                ?>
                                <option value="<?=$id?>"><?=$title?></option>
                                <?
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="w-[200px]">
                    <label for="pages">Количество страниц:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="pages" value="<?=$updateQuery["pages-quantity"]?>">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="genre">Жанр:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="genre" value="<?=$updateQuery["genre"]?>">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="img">Изображение товара:</label>
                    <input type="file" name="img">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="pt-4 text-xl">
                    <h1>Отображается?</h1>
                    <input type="radio" name="featured" value="Да" <?echo ($updateQuery["featured"]=="Да") ? "checked" : ""; ?>>
                    <label for="featured">Да</label>
                    <input type="radio" name="featured" value="Нет" <?echo ($updateQuery["featured"]=="Нет") ? "checked" : ""; ?>>
                    <label for="featured">Нет</label>
                </div>
                <div class="pt-4 text-xl">
                    <h1>Активна?</h1>
                    <input type="radio" name="active" value="Да" <?echo ($updateQuery["active"]=="Да") ? "checked" : ""; ?>>
                    <label for="active">Да</label>
                    <input type="radio" name="active" value="Нет" <?echo ($updateQuery["active"]=="Нет") ? "checked" : ""; ?>>
                    <label for="active">Нет</label>
                </div>
            </div>
            <div class="pt-4">
                <button class="px-2 py-2 bg-orange-600 rounded-md hover:bg-orange-800" type="submit">Сохранить</button>
            </div>
        </form>
    </div>
</main>
