        <div class="max-w-[500px] h-[300px] bg-transparent border-2 border-black dark:border-white p-5 text-black dark:text-white rounded-md">
            <ul>
                <a href="/profile"><li class="py-2 px-2 text-base hover:bg-[#DE4A0B] hover:rounded-md transition-all	">Профиль</li></a>
                <a href="/personal-data"><li class="py-2 px-2 text-base hover:bg-[#DE4A0B] hover:rounded-md transition-all">Личные данные</li></a>
                <a href="/orders"><li class="py-2 px-2 text-base hover:bg-[#DE4A0B] hover:rounded-md transition-all	">Заказы</li></a>
                <a href="/bookmarks"><li class="py-2 px-2 text-base hover:bg-[#DE4A0B] hover:rounded-md transition-all	">Закладки</li></a>
            </ul>
            <div class="border-2 border-t border-black dark:border-white"></div>
            <form action="/destroySession" method="post">
                <button type="submit"><p class="py-2 px-12 text-base text-black dark:text-white transition-all hover:bg-[#BC3029] hover:rounded-md hover:border-none">Выйти</p></button>
            </form>
        </div>