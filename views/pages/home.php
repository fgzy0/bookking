<?

use app\controllers\Info;

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
                        <button class="py-3 px-6 rounded-full bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] hover:bg-none border-2 border-[#BC3029] hover:scale-105 transition-all"  type="submit">Новинки</button>
                        <button class="py-3 px-6 rounded-full bg-none border-2 border-[#DE4A0B] hover:bg-gradient-to-r from-[#BC3029] to-[#952620] hover:border-none hover:scale-105 transition-all" type="submit">Доставка и оплата</button>
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

                            <button class="prev hover:bg-gradient-to-r from-[#140504] to-[#36312f] transition-all" id="btnPrev"><ion-icon name="chevron-back-outline"></ion-icon></button>
                            <button class="next hover:bg-gradient-to-r from-[#140504] to-[#36312f] transition-all" id="btnNext"><ion-icon name="chevron-forward-outline"></ion-icon></button>     
                    </div>
                </section>
            </section>
            <section class="pt-10">

                <?
                    Info::selectActivecategories();
                ?>
            </section>
            <div>
            </div>
        </div>

    </main>
<? require("views/parts/footer.php") ?>
