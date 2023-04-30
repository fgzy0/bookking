<?

use app\utils\Connect;

require_once("views/pages/admin/parts/admin-header.php");

$id = $_GET["id"];
$sql = "SELECT * FROM `users` WHERE `id` = '$id'";
$updateQuery = mysqli_query(Connect::connectDB(), $sql);
$updateQuery = mysqli_fetch_assoc($updateQuery);
?>
<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="text-black dark:text-white w-[500px] mx-[550px]">
        <h1 class="text-3xl">Редактирование личных данных пользователя: <?=$updateQuery["username"]?></h1>
        <form action="/reductuser" method="post">
            <input type="hidden" name="id" value="<?=$updateQuery["id"]?>">
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="username">Имя пользователя:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="username" value="<?=$updateQuery["username"]?>">
                </div>
                <div class="w-[200px]">
                    <label for="email">Email:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="email" name="email" value="<?=$updateQuery["email"]?>">
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="birthdate">Дата рождения:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="date" name="birthdate" value="<?=$updateQuery["birthdate"]?>">
                </div>
                <div class="w-[200px]">
                    <label for="phonenumber">Номер телефона:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="phonenumber" value="<?=$updateQuery["phonenum"]?>">
                </div>
            </div>
            <div class="pt-4 text-xl">
                <input type="radio" name="role" value="User" <?echo ($updateQuery["role"]=="User") ? "checked" : ""; ?>>
                <label for="user">User</label>
                <input type="radio" name="role" value="Admin" <?echo ($updateQuery["role"]=="Admin") ? "checked" : ""; ?>>
                <label for="admin">Admin</label>
            </div>
            <div class="pt-4">
                <button class="px-2 py-2 bg-orange-600 rounded-md hover:bg-orange-800" type="submit">Сохранить</button>
            </div>
        </form>
    </div>
</main>
