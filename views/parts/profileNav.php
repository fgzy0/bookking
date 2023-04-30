        <div class="max-w-[500px] h-[300px] bg-transparent border-2 border-black dark:border-white p-5 text-black dark:text-white rounded-md">
            <ul>
                <a href="/profile"><li class="py-2 px-2 text-base hover:bg-[#DE4A0B] hover:rounded-md">Профиль</li></a>
                <a href="/personal-data"><li class="py-2 px-2 text-base hover:bg-[#DE4A0B] hover:rounded-md">Личные данные</li></a>
                <a href="/orders"><li class="py-2 px-2 text-base hover:bg-[#DE4A0B] hover:rounded-md">Заказы</li></a>
                <a href="/bookmarks"><li class="py-2 px-2 text-base hover:bg-[#DE4A0B] hover:rounded-md">Закладки</li></a>
            </ul>
            <form action="/destroySession" method="post">
                <button type="submit"><p class="py-2 px-12 text-base text-black dark:text-white border-t-2 border-black dark:border-white hover:bg-[#BC3029] hover:rounded-md hover:border-none">Выйти</p></button>
            </form>
        </div>