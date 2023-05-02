<?
use app\utils\Connect;
use app\controllers\Info;

require_once("views/pages/admin/parts/admin-header.php");

$id = $_GET["id"];
$sql = "SELECT * FROM `products` WHERE `id` = '$id'";
$updateQuery = mysqli_query(Connect::connectDB(), $sql);
$updateQuery = mysqli_fetch_assoc($updateQuery);
?>

<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="text-black dark:text-white w-[500px] mx-[550px]">
        <h1 class="text-3xl">Удаление товара: <?=$updateQuery["title"]?></h1>
        <form method="post" action="/deleteproduct">
            <input type="hidden" name="id" value="<?=$updateQuery["id"]?>">
            <button class="mt-4 px-2 py-2 bg-orange-600 rounded-md hover:bg-orange-800" type="submit">Удалить</button>
        </form>
    </div>
</main>