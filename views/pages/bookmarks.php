<? require('views/parts/header.php')?>

<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="flex justify-start space-x-5 mx-80 py-8">
        <?
        require_once("views/parts/profileNav.php");
        ?>
        <div class="px-10">
            <div class="flex space-x-5 items-center mb-6">
                <h1 class="text-4xl font-bold">Закладки</h1>
                <p class="">1 товар</p>
            </div>
            <div class="mt-6">
                <div class="mt-4 flex space-x-5">
                    <div>
                        <img class="w-[185px] h-[270px]" src="/png_files/11.webp">
                    </div>
                    <div>
                        <h1 class="text-xl">Война миров (Герберт Уэллс)</h1>
                        <p>Цена: 649 ₽</p>
                        <p>Статус: активный</p>
                        <button type="submit" class="mt-4 py-2 px-2 text-base bg-blue-500 rounded-md hover:bg-blue-700">Удалить из закладок</button>
                    </div>
                </div>
            </div>    
        </div>
    </div>


</main>

<? require("views/parts/footer.php")?>