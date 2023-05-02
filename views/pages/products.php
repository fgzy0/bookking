<?
use app\controllers\Info;
use app\controllers\Admin;

include('views/pages/admin/parts/admin-header.php');
?>

<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="mt-4 dark:text-white text-black">
        <h1 class="text-3xl font-bold">Управление товарами</h1>
        <div class="mt-6">
            <a href="/add-product"><button class="px-2 py-2 bg-orange-600 rounded-md hover:bg-orange-800">Добавить товар</button></a>
            <table class="mt-6 py-2 px-2 border-2 text-lg border-collapse border-black dark:border-white">
                <thead class="text-left">
                    <th class="px-2 border-2 border-black dark:border-white">Id</th>
                    <th class="px-2 border-2 border-black dark:border-white">Название</th>
                    <th class="px-2 border-2 border-black dark:border-white">Автор</th>
                    <th class="px-2 border-2 border-black dark:border-white">Id категории:</th>
                    <th class="px-2 border-2 border-black dark:border-white">Цена со скидкой</th>
                    <th class="px-2 border-2 border-black dark:border-white">Полная цена</th>
                    <th class="px-2 border-2 border-black dark:border-white">Жанр</th>
                    <th class="px-2 border-2 border-black dark:border-white">Дата выпуска</th>
                    <th class="px-2 border-2 border-black dark:border-white">Кол-во страниц</th>
                    <th class="px-2 border-2 border-black dark:border-white">Изображение</th>
                    <th class="px-2 border-2 border-black dark:border-white">Используется?</th>
                    <th class="px-2 border-2 border-black dark:border-white">Активна?</th>
                    <th class="px-2 border-2 border-black dark:border-white">Действия</th>
                </thead>
                <?
                Admin::selectProducts();
                ?>
                </table>
        </div>
    </div>
</main>
</body>
</html>