<?  require('views/parts/header.php');
?>

<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="flex justify-start space-x-5 mx-80 py-8">
        <?
        require_once("views/parts/profileNav.php");
        ?>
        <div class="px-10">
            <?
            if($_SESSION["user"]["role"] == "Admin"){
                ?>
                <h1 class="text-4xl font-bold mb-6 text-black dark:text-white">ПРОФИЛЬ (Администратор)</h1>
                <?
            }else{
                ?>
                <h1 class="text-4xl font-bold mb-6 text-black dark:text-white">ПРОФИЛЬ</h1>
                <?
                }
                ?>
            <?
            if($_SESSION["user"]["role"] == "Admin"){
                ?>
                <div class="mb-6 border-t-4 dark:border-white border-black rounded-sm">
                    <h1 class="text-3xl mb-2 hover:text-orange-700"><a href="/dashboard">Панель администратора</a></h1>
                    <p class="text-xl mb-1">Управление пользователями, товарами, категориями</p>
                </div>
                <?
            }
            ?>
            <div class="mb-6 border-t-4 dark:border-white border-black rounded-sm">
                <h1 class="text-3xl mb-2 hover:text-orange-700"><a href="/personal-data">Аватар</a></h1>
                <img class="w-[200px] h-[200px] rounded-md" src="/png_files/avatars/<?=$_SESSION["user"]["avatar"]?>">
            </div>
            <div class="mb-6 border-t-4 dark:border-white border-black rounded-sm">
                <h1 class="text-3xl mb-2 hover:text-orange-700"><a href="/personal-data">Личные данные</a></h1>
                <p class="text-xl mb-1"><?=$_SESSION["user"]["name"] . " " . $_SESSION["user"]["surname"] . " " . $_SESSION["user"]["fathname"]?></p>
                <p class="text-xl mb-1"><?=$_SESSION["user"]["username"]?></p>
                <p class="text-lg"><?=$_SESSION["user"]["email"] . " " . $_SESSION["user"]["phonenum"]?> </p>
            </div>
            <div class="mb-6 border-t-4 dark:border-white border-black rounded-sm">
                <h1 class="text-3xl mb-2 hover:text-orange-700"><a href="#">Активные заказы</a></h1>
                <p class="text-xl mb-1">У вас пока нет активных заказов</p>
            </div>
            <div class="mb-6 border-t-4 dark:border-white border-black rounded-sm">
                <h1 class="text-3xl mb-2 hover:text-orange-700"><a href="#">Закладки</a></h1>
                <p class="text-xl mb-1">У вас пока нет закладок</p>
            </div>
        </div>
    </div>


</main>

<? require("views/parts/footer.php")?>