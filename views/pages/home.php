<? 
require("views/parts/header.php")
?>
    <main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
        <div class="content">
            <section class="grid grid-cols-2 gap-5">
                <section class="w-[758] h-[305]">
                    <div class="pt-6">
                        <p class="xl:text-4xl lg:text-2xl font-bold">«БукКинг» — российская федеральная сеть книжных магазинов. Самая крупная книготорговая сеть в России. Генеральный директор — Котов Максим</p>
                    </div>
                    <div class="pt-12">
                        <p class="text-xl">Мы предлагаем широкий выбор книг разного жанра,<br> разных эпох и на разных языках</p>
                    </div>
                    <div class="pt-12 flex gap-10">
                        <button class="py-3 px-6 rounded-full bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:bg-none border-2 border-[#BC3029]"  type="submit">Новинки</button>
                        <button class="py-3 px-6 rounded-full bg-none border-2 border-[#DE4A0B] hover:bg-gradient-to-r from-[#BC3029] to-[#952620] hover:border-none" type="submit">Доставка и оплата</button>
                    </div>
                </section>
                <section class="pt-6">
                    <div>
                        <img class="rounded-md" src="/png_files/reklama.png">
                    </div>
                    <div class="pt-6">
                        <div class="slider" id="slider">
                            <img class="slides fade" src="/png_files/2823-imageWeb.webp" alt="">
                            <img class="slides fade" src="/png_files/2836-imageWeb.webp" alt="">
                            <img class="slides fade" src="/png_files/2849-imageWeb.webp" alt="">
                        </div>

                            <button class="prev hover:bg-gradient-to-r from-[#140504] to-[#36312f]" id="btnPrev"><ion-icon name="chevron-back-outline"></ion-icon></button>
                            <button class="next hover:bg-gradient-to-r from-[#140504] to-[#36312f]" id="btnNext"><ion-icon name="chevron-forward-outline"></ion-icon></button>     
                    </div>
                </section>
            </section>
            <section class="pt-10">
                <div>
                    <p class="text-3xl">Хиты продаж</p>
                </div>
                <div class="pt-6 flex gap-6">
                    <div class="hover:scale-105 rounded-sm">
                        <a><img class="w-[185px] h-[270px]" src="/png_files/1.webp"></a>
                        <div class="pt-2">
                            <p>690 ₽</p>
                            <p class="text-lg font-bold">Boy with a bird in chest</p>
                            <p class="text-base">Егор Маслеников</p>
                        </div>
                        <div class="pt-2 flex items-center space-x-2">
                            <button class="py-1 px-1 bg-none border-2 border-[#747474] hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:border-none" type="submit">В корзину</button>
                            <button class="text-2xl hover:bg-blue-500" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                        </div>
                    </div>
                    <div class="hover:scale-105 rounded-sm">
                        <a><img class="w-[185px] h-[270px]" src="/png_files/2.jpg"></a>
                        <div class="pt-2">
                            <p>1499 ₽</p>
                            <p class="text-lg font-bold">Русские сказки</p>
                            <p class="text-base">Иван Грозный</p>
                        </div>
                        <div class="pt-2 flex items-center space-x-2">
                            <button class="py-1 px-1 bg-none border-2 border-[#747474] hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:border-none" type="submit">В корзину</button>
                            <button class="text-2xl hover:bg-blue-500" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                        </div>
                    </div>
                    <div class="hover:scale-105 rounded-sm">
                        <a><img class="w-[185px] h-[270px]" src="/png_files/3.jpg"></a>
                        <div class="pt-2">
                            <p>990 ₽</p>
                            <p class="text-lg font-bold">Поэмы Пушкина</p>
                            <p class="text-base">А.С. Пушкин</p>
                        </div>
                        <div class="pt-2 flex items-center space-x-2">
                            <button class="py-1 px-1 bg-none border-2 border-[#747474] hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:border-none" type="submit">В корзину</button>
                            <button class="text-2xl hover:bg-blue-500" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                        </div>
                    </div>
                    <div class="hover:scale-105 rounded-sm">
                        <a><img class="w-[185px] h-[270px]" src="/png_files/4.jpg"></a>
                        <div class="pt-2">
                            <p>Бесплатно ₽</p>
                            <p class="text-lg font-bold">Ракета Медведева</p>
                            <p class="text-base">Дмитрий Медведев</p>
                        </div>
                        <div class="pt-2 flex items-center space-x-2">
                            <button class="py-1 px-1 bg-none border-2 border-[#747474] hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:border-none" type="submit">В корзину</button>
                            <button class="text-2xl hover:bg-blue-500" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                        </div>
                    </div>
                    <div class="hover:scale-105 rounded-sm">
                        <a><img class="w-[185px] h-[270px]" src="/png_files/5.jpg"></a>
                        <div class="pt-2">
                            <p>Миска Газа ₽</p>
                            <p class="text-lg font-bold">Великий</p>
                            <p class="text-base">Владимир Путин</p>
                        </div>
                        <div class="pt-2 flex items-center space-x-2">
                            <button class="py-1 px-1 bg-none border-2 border-[#747474] hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:border-none" type="submit">В корзину</button>
                            <button class="text-2xl hover:bg-blue-500" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                        </div>
                    </div>
                    <div class="hover:scale-105 rounded-sm lg:hidden  xl:block">
                        <a><img class="w-[185px] h-[270px]" src="/png_files/6.jpeg"></a>
                        <div class="pt-2">
                            <p>390 ₽</p>
                            <p class="text-lg font-bold">Коты Эрмитажа</p>
                            <p class="text-base">От создателей Чебурашки</p>
                        </div>
                        <div class="pt-2 flex items-center space-x-2">
                            <button class="py-1 px-1 bg-none border-2 border-[#747474] hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:border-none" type="submit">В корзину</button>
                            <button class="text-2xl hover:bg-blue-500" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                        </div>
                    </div>
                    <div class="hover:scale-105 rounded-sm lg:hidden  xl:block">
                        <a><img class="w-[185px] h-[270px]" src="/png_files/7.jpeg"></a>
                        <div class="pt-2">
                            <p>5 рисов ₽</p>
                            <p class="text-lg font-bold">Какое то аниме</p>
                            <p class="text-base">Японцы хз</p>
                        </div>
                        <div class="pt-2 flex items-center space-x-2">
                            <button class="py-1 px-1 bg-none border-2 border-[#747474] hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:border-none" type="submit">В корзину</button>
                            <button class="text-2xl hover:bg-blue-500" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                        </div>
                    </div>
                    <div class="hover:scale-105 rounded-sm lg:hidden xl:block">
                        <a href="/book"><img class="w-[185px] h-[270px]" src="/png_files/8.webp">
                        <div class="pt-2">
                            <p>9999 ₽</p>
                            <p class="text-lg font-bold">Драйв 2</p>
                            <p class="text-base">Эрнейст Клайн</p>
                        </div></a>
                        <div class="pt-2 flex items-center space-x-2">
                            <button class="py-1 px-1 bg-none border-2 border-[#747474] hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:border-none" type="submit">В корзину</button>
                            <button class="text-2xl hover:bg-blue-500" type="submit"><ion-icon name="heart-outline"></ion-icon></button>
                        </div>
                    </div>
                </div>
            </section>
            <div>
            </div>
        </div>

    </main>
<? require("views/parts/footer.php") ?>
