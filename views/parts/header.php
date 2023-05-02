<?
use app\utils\Connect;
use app\controllers\Info;
Info::sessionStart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookKing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="/input.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body class="bg-[#eeeeee] text-black font-Raleway pt-6 dark:text-white dark:bg-gradient-to-r from-[#000000] via-[#19006c] to-[#000000]">
    <header class="mx-auto xl:w-[1600px] xl:px-0 px-14 items-center">
        <div class="flex justify-between pt-big">
            <span class="font-bold text-3xl">
                <a href="/">BookKing</a>
            </span>
            <ul class="ul-menu">
                <li><a style="margin-left: 1rem;" class="hover:text-[#DE4A0B] xl:text-base lg:text-sm transition-all" href="/main">Главное 2023</a></li>
                <p style="margin-left: 1rem;">|</p>
                <li><a style="margin-left: 1rem;" class="hover:text-[#DE4A0B] xl:text-base lg:text-sm transition-all" href="#">Иностранные</a></li>
                <li><p style="margin-left: 1rem;">|</p>
                <li><a style="margin-left: 1rem;" class="hover:text-[#DE4A0B] xl:text-base lg:text-sm transition-all" href="#" href="#">Для школы</a></li>
                <p style="margin-left: 1rem;">|</p>
                <li><a style="margin-left: 1rem;" class="hover:text-[#DE4A0B] xl:text-base lg:text-sm transition-all" href="#" href="#">Для молодежи</a></li>
                <p style="margin-left: 1rem;">|</p>
                <li style="margin-left: 1rem;"><button id="btn-menu"><a class="hover:text-[#DE4A0B] xl:text-base lg:text-sm items-center transition-all" href="#" href="#">Еще <ion-icon style="font-size: 15px;" name="chevron-down-circle"></ion-icon></button></li>
                    <ul class="dop-ul">
                        <div>
                            <li class="menu-item hover:bg-[#DE4A0B] rounded-md transition-all"><img class="menu-src" src="/png_files/menu/book.d440297.svg"><a href="#">Научная фантастика</a></li>
                            <li class="menu-item hover:bg-[#DE4A0B] rounded-md transition-all"><img class="menu-src" src="/png_files/menu/stationery.eca8427.svg"><a href="#">Художественная литература</a></li>
                            <li class="menu-item hover:bg-[#DE4A0B] rounded-md transition-all"><img class="menu-src" src="/png_files/menu/games.15887dd.svg"><a href="#">Увлечения</a></li>
                            <li class="menu-item hover:bg-[#DE4A0B] rounded-md transition-all"><img class="menu-src" src="/png_files/menu/art.fa9505e.svg"><a href="#">Искусство</a></li>
                            <li class="menu-item hover:bg-[#DE4A0B] rounded-md transition-all"><img class="menu-src" src="/png_files/menu/souvenirs.5f8a9fc.svg"><a href="#">Красота. Здоровье. Спорт</a></li>
                            <li class="menu-item hover:bg-[#DE4A0B] rounded-md transition-all"><img class="menu-src" src="/png_files/menu/calendar.8cd5e38.svg"><a href="#">Психология</a></li>
                            <li class="menu-item hover:bg-[#DE4A0B] rounded-md transition-all"><img class="menu-src" src="/png_files/menu/promo.9ba3680.svg"><a href="#">Распродажа</a></li>
                        </div>
                    </ul>
                </li>
            </ul>

            <button class="burger xl:hidden lg:hidden">
                <span class="burger-line top-line"></span>
                <span class="burger-line mid-line"></span>
                <span class="burger-line bottom-line"></span>
            </button>
            <div class="flex space-x-5">
                <div class="search-box">
                    <input class="inp" type="text" placeholder="Введите для поиска...">
                    <div class="search-btn">
                        <ion-icon class="text-2xl" name="search-outline"></ion-icon>
                    </div>

                    <div class="cancel-btn">
                        <ion-icon name="close-outline"></ion-icon>
                    </div>
                </div>
                <div class="items-center flex space-x-6">
                    <a href="#"><ion-icon class="text-2xl" name="cart-outline"></ion-icon></a>
                        <?
                        if($_SESSION["user"] == false){
                            ?>
                            <a class="account" href="#">
                                <ion-icon class="text-2xl pt-6" name="person-outline"></ion-icon>
                            </a>
                            <?
                        }else{
                            ?>
                            <a class="account" href="/profile">
                                <img class="w-[30px] h-[30px] mt-4 rounded-md" src="/png_files/avatars/<?=$_SESSION["user"]["avatar"]?>">
                            </a>
                            <?
                        }
                        ?>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <ul id="menu" class="hidden xl:hidden lg:hidden absolute left-6 right-6 flex flex-col items-center rounded-md">
                <li><a class="block py-2" href="#">Главное 2023</a></li>
                <li><a class="block py-2" href="#">Иностранные</a></li>
                <li><a class="block py-2" href="#">Для школы</a></li>
                <li><a class="block py-2" href="#">Для молодежи</a></li>
                <li><a class="block py-2" href="#">Еще</a>
                </li>
            </ul>
        </div>
        <section class="wrapper border-2 border-black dark:border-white">
            <div class="form-box login">
                <h2 class="text-black dark:text-white">Войти</h2>
                <form action="/authSession" method="post">
                    <div class="input-box border-b-2 border-black dark:border-white">
                        <input class="text-black dark:text-white" type="email" name="email" required>
                        <label class="text-black dark:text-white" for="email">Email</label>
                    </div>
                    <div class="input-box border-b-2 border-black dark:border-white">
                        <input class="text-black dark:text-white" type="password" name="password" required>
                        <label class="text-black dark:text-white" for="password">Пароль</label>
                    </div>
                    <div class="remember-forgot text-black dark:text-white">
                        <label><input type="checkbox"> Запомнить данные?</label>
                        <a href="#"> Забыли пароль?</a>
                    </div>
                    <div>
                        <a href="/profile"><button type="submit" class="baton hover:bg-gradient-to-r from-[#BC3029] to-[#DE4A0B] border-2 text-black border-black dark:text-white dark:border-white">Войти</button></a>
                    </div>
                </form>
                <div class="login-register text-black dark:text-white">
                    <p>Вы не создавали аккаунт?<a class="register-link text-black dark:text-white" href="#"> Зарегистрируйтесь</a></p>
                </div>
            </div>
            <span class="bebra">
                <a href="#"><ion-icon name="close-outline"></ion-icon></a>
            </span>
            <div class="form-box register">
                <h2>Регистрация</h2>
                <form action="/registeruser" method="post">
                    <div class="input-box border-b-2 border-black dark:border-white">
                        <input class="text-black dark:text-white" type="text" name="username" required>
                        <label class="text-black dark:text-white" for="username">Имя пользователя</label>
                    </div>
                    <div class="input-box border-b-2 border-black dark:border-white">
                        <input class="text-black dark:text-white" type="email" name="email" required>
                        <label class="text-black dark:text-white" for="email">Email</label>
                    </div>
                    <div class="input-box border-b-2 border-black dark:border-white">
                        <input class="text-black dark:text-white" type="password" name="password" required>
                        <label class="text-black dark:text-white" for="password">Пароль</label>
                    </div>
               
                <div class="remember-forgot text-black dark:text-white">
                    <label><input type="checkbox"> Я согласен с условиями регистрации</label>
                </div>
                <button type="submit" class="baton hover:bg-gradient-to-r from-[#BC3029] to-[#952620]">Регистрация</button>
                <div class="login-register text-black dark:text-white">
                    <p>Уже есть аккаунт?<a class="login-link text-black dark:text-white" href="#"> Войти</a></p>
                </div>
                </form>
            </div>
        </section>
    </header>
