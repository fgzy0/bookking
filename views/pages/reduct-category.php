<?

use app\utils\Connect;

require_once("views/pages/admin/parts/admin-header.php");

$id = $_GET["id"];
$sql = "SELECT * FROM `categories` WHERE `id` = '$id'";
$updateQuery = mysqli_query(Connect::connectDB(), $sql);
$updateQuery = mysqli_fetch_assoc($updateQuery);
?>
<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="text-black dark:text-white w-[500px] mx-[550px]">
        <h1 class="text-3xl">Редактирование категории: <?=$updateQuery["title"]?></h1>
        <form action="/reductcategory" method="post">
            <input type="hidden" name="id" value="<?=$updateQuery["id"]?>">
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="username">Название:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="title" value="<?=$updateQuery["title"]?>">
                </div>
                <div class="w-[200px]">
                    <label for="email">Описание:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="description" value="<?=$updateQuery["description"]?>">
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
