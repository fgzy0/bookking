<?
use app\controllers\Info;
include('views/pages/admin/parts/admin-header.php');
?>

<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div>
        <div>
            <p class="text-xl">Найти по Username:</p>
            <form class="mt-2">
                <input class="px-2 py-1 text-black border-2 border-black dark:border-white rounded-md" type="text">
            </form>
            <h1 class="text-2xl pt-4"><?
            if(isset($_SESSION["updateUser"])){
                echo $_SESSION["updateUser"];
                unset($_SESSION["updateUser"]);
            }
            if(isset($_SESSION["deleteSuccess"])){
                echo $_SESSION["deleteSuccess"];
                unset($_SESSION["deleteSuccess"]);
            }
            ?></h1>
        </div>
        <table class="mt-6 py-2 px-2 border-2 text-xl border-collapse border-black dark:border-white">
            <thead class="text-left">
                <th class="px-2 border-2 border-black dark:border-white">Id:</th>
                <th class="px-2 border-2 border-black dark:border-white">Username:</th>
                <th class="px-2 border-2 border-black dark:border-white">Email:</th>
                <th class="px-2 border-2 border-black dark:border-white">Номер телефона:</th>
                <th class="px-2 border-2 border-black dark:border-white">ФИО:</th>
                <th class="px-2 border-2 border-black dark:border-white">Дата рождения:</th>
                <th class="px-2 border-2 border-black dark:border-white">Роль:</th>
                <th class="px-2 border-2 border-black dark:border-white">Действия:</th>
            </thead>
            <?
            Info::selectInfo();
            ?>
        </table>
    </div>
</main>
</body>
</html>

