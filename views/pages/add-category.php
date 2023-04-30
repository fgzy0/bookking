<?

use app\utils\Connect;

require_once("views/pages/admin/parts/admin-header.php");

?>
<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="text-black dark:text-white w-[500px] mx-[550px]">
        <h1 class="text-3xl">Добавить категорию товаров:</h1>
        <form action="/addcategory" method="post">
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="w-[200px]">
                    <label for="username">Название категории:</label>
                    <input class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="title">
                </div>
                <div class="w-[200px]">
                    <label for="email">Описание:</label>
                    <textarea class="w-[220px] px-2 py-1 text-black rounded-md border-2 border-black dark:border-white" type="text" name="description"></textarea>
                </div>
            </div>
            <div class="flex space-x-5 pt-4 justify-between">
                <div class="text-xl">
                    <h1>Показывается?</h1>
                    <input type="radio" name="featured" value="Да">
                    <label for="Yes">Да</label>
                    <input type="radio" name="featured" value="Нет"> 
                    <label for="No">Нет</label>
                </div>
                <div class="text-xl">
                    <h1>Активна?</h1>
                    <input type="radio" name="active" value="Да">
                    <label for="Yes">Да</label>
                    <input type="radio" name="active" value="Нет"> 
                    <label for="No">Нет</label>
                </div>
            </div>
            <div class="pt-4">
                <button class="px-2 py-2 bg-orange-600 rounded-md hover:bg-orange-800" type="submit">Сохранить</button>
            </div>
        </form>
    </div>
</main>
