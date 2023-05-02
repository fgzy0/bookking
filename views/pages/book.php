<?

use app\utils\Connect;

 require('views/parts/header.php') ?>
    <?
    $id = $_GET["id"];
    $sqlSelect = "SELECT * FROM `products` WHERE `id` = '$id'";
    $querySelect = mysqli_query(Connect::connectDB(), $sqlSelect);
    $product = mysqli_fetch_assoc($querySelect);
    ?>
    <main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
        <div class="flex space-x-5 mx-80 py-8">
            <div class="img-book">
                <img class="w-[250px] h-[379px] hover:scale-105 transition-all" src="/png_files/products/<?=$product["img"]?>">
            </div>
            <div class="mb-4 max-w-xl">
                <h1 class="text-4xl font-bold"><?=$product["title"]?></h1>
                <p class=" mt-2 font-sans-medium text-gray text-sm"><?=$product["author"]?> (Автор)</p>
                <p class="mb-5 mt-2 font-sans-medium text-gray text-lg">Жанр: <?=$product["genre"]?></p>
                <div class="mb-4 block font-sans-semibold text-base tracking-wide">
                    <label>Цена:</label>
                    <div class="">
                        <a href="#" class="mb-4 flex flex-wrap rounded p-4 border-2 border-[#DE4A0B] bg-transparent transition-all">
                            <div class="text-lg text-secondary font-sans-medium w-full truncate">Полная версия на русском языке</div>
                            <div class="w-full">
                                <span class="text-3xl text-red-600 line-through mr-1 text-primary"><?=$product["price-full"]?> ₽</span>
                                <span class="text-2xl text-green-500 font-sans-bold"><?=$product["price-discount"]?> ₽</span>
                            </div>
                        </a>
                        <div class="mb-6">
                            <button class="py-3 px-8 rounded-full bg-orange-600 hover:border-2 hover:border-black hover:bg-orange-700">Купить</button>   
                        </div>
                    </div>
                    <div class="mb-4">
                        <h1 class="text-2xl font-bold">Описание</h1>
                        <p class="text-base"><?=$product["description"]?></p>
                    </div>
                    <div class="">
                        <h1 class="text-2xl font-bold">Детали продукта</h1>
                        <div class="w-2/3">
                            <div class="flex justify-between space-x-16">
                                <div class="font-sans-medium text-right text-s text-gray">Автор</div>
                                <div class="text-left"><?=$product["author"]?></div>
                            </div>
                            <div class="flex justify-between space-x-16 ">
                                <div class="font-sans-medium text-right text-s text-gray">Дата публикации</div>
                                <div class="text-left"><?=$product["date"]?></div>
                            </div>
                            <div class="flex justify-between space-x-16">
                                <div class="font-sans-medium text-right text-s text-gray">Количество страниц</div>
                                <div><?=$product["pages-quantity"]?></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mx-80 mb-4">
            <div>
                <div class="mb-4 text-3xl font-bold"><a>Похожие товары в жанре <?=$product["genre"]?>:</a></div>
                <div class="flex space-x-5"> 
                    <?
                    $genre = $product['genre'];
                    $sqlSelect2 = "SELECT * FROM `products` WHERE `genre` = '$genre' and  `id` != '$id' ORDER BY RAND() LIMIT 5";
                    $selectQuery = mysqli_query(Connect::connectDB(), $sqlSelect2);

                    $count = mysqli_num_rows($selectQuery);
                    if($count > 0){
                        for($i = 1; $rows = mysqli_fetch_assoc($selectQuery); ++$i){
                            if($i > 5){
                                break;
                            }
                            ?>
                            <div>
                              <div class="hover:scale-105 rounded-sm transition-all w-[185px]">
                                  <a href="/book?id=<?=$rows["id"]?>"><img class="w-[185px] h-[270px]" src="/png_files/products/<?=$rows["img"]?>">
                                  <div class="pt-2">
                                      <div class="flex space-x-2 items-center">
                                          <p class="text-md text-red-600 line-through mr-1 text-primary"><?=$rows["price-full"]?> ₽</p>
                                          <p class="text-lg text-green-500 font-sans-bold"><?=$rows["price-discount"]?> ₽</p>
                                      </div>
                                      <p class="text-lg font-bold"><?=$rows["title"]?></p>
                                      <p class="text-base"><?=$rows["author"]?></p>
                                  </div></a>
                                  <div class="pt-2 flex items-center space-x-2">
                                      <button class="py-1 px-1 bg-none border-2 border-[#747474] hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:border-none transition-all" type="submit">В корзину</button>
                                      <button class="text-2xl hover:bg-blue-500" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                                  </div>
                              </div>
                            </div>
                            <?  
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
<? require("views/parts/footer.php") ?>
