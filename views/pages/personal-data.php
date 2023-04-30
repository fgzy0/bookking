<? require('views/parts/header.php')?>

<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
    <div class="flex justify-start space-x-5 mx-80 py-8">
        <?
        require_once("views//parts/profileNav.php");
        ?>
        <div class="px-10 w-[500px]">
            <h1 class="text-4xl font-bold mb-6">Личные данные</h1>
            <div>
                <h1 class="text-2xl font-bold mb-6 border-t-4 dark:border-white border-black rounded-sm">Изменение аватара:</h1>
                <form method="post" action="/updateAvatar" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$_SESSION['user']['id']?>">
                    <input type="file" name="file"><br>
                    <button class="mt-4 px-2 py-2 text-base bg-[#DE4A0B] rounded-md hover:bg-orange-700" type="submit">Изменить</button>
                </form>
                <h1 class="text-2xl font-bold mt-4 border-t-4 dark:border-white border-black rounded-sm">Добавление номера телефона псевдонима:</h1>
            <form action="/updateUser2" method="post">
                <input type="hidden" name="id" value="<?=$_SESSION["user"]["id"]?>">
                <div class="flex space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Номер телефона</div>
                        <input class="px-2 py-2 w-[300px] srounded border-black border-2 text-black font-semibold" type="text" value="<?=$_SESSION["user"]["phonenum"]?>" name="phonenum">
                    </div>
                    <div>
                        <div>Псевдоним (Username)</div>
                        <input class="px-2 py-2 w-[300px] rounded border-black border-2 text-black font-semibold" type="text" value="<?=$_SESSION["user"]["username"]?>" name="username">
                    </div>
                </div>
                <button class="mt-4 px-2 py-2 text-base bg-[#DE4A0B] rounded-md hover:bg-orange-700" type="submit">Сохранить</button>
            </form>
                <h1 class="text-2xl font-bold mt-4 border-t-4 dark:border-white border-black rounded-sm">Изменение ФИО и даты рождения:</h1>
            <form>
                <div class="flex space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Фамилия</div>
                        <input class="px-2 w-[300px] py-2 rounded border-black border-2 text-black font-semibold " type="text" value="<?=$_SESSION["user"]["surname"]?>" name="surname">
                    </div>
                    <div>
                        <div>Имя</div>
                        <input class="px-2 py-2 w-[300px] rounded border-black border-2 text-black font-semibold " type="text" value="<?=$_SESSION["user"]["name"]?>" name="name">
                    </div>
                </div>
                <div class="flex space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Отчество</div>
                        <input class="px-2 py-2 w-[300px] rounded border-black border-2 text-black font-semibold" type="text" value="<?=$_SESSION["user"]["fathname"]?>" name="fathername">
                    </div>
                    <div>
                        <div>Дата рождения</div>
                        <input class="px-2 py-2 w-[300px] rounded border-black border-2 text-black font-semibold" type="date" value="<?=$_SESSION["user"]["birthdate"]?>" name="birthdate">
                    </div>
                </div>
                <button class="mt-4 px-2 py-2 text-base bg-[#DE4A0B] rounded-md hover:bg-orange-700" type="submit">Сохранить</button>
            </form>
            <h1 class="text-2xl font-bold mt-4 border-t-4 dark:border-white border-black rounded-sm">Изменение Email и пароля:</h1>
            <form>
                <div class="flex space-x-5 mt-4 text-black dark:text-white">
                    <div>
                        <div>Email</div>
                        <input class="px-2 py-2 w-[300px] srounded border-black border-2 text-black font-semibold" type="email" value="<?=$_SESSION["user"]["email"]?>" name="email">
                    </div>
                    <div>
                        <div>Пароль</div>
                        <input class="px-2 py-2 w-[300px] rounded border-black border-2 text-black font-semibold" type="password" name="password">
                    </div>
                </div>
                <button class="mt-4 px-2 py-2 text-base bg-[#DE4A0B] rounded-md hover:bg-orange-700" type="submit">Сохранить</button>
            </form>
            </div>
        </div>
    </div>


</main>

<? require("views/parts/footer.php")?>