<? require('views/parts/header.php')?>
<main class="w-whead mx-auto pb-10 xl:w-[1600px] mm:w-[1400px] lg:w-[1150px] md:w-[768px]">
<div class="text-black dark:text-white px-[400px]">
    <h1 class="text-3xl text-red-600">Ошибка:</h1>
    <p class="text-3xl pt-4">
        <?
        if(isset($_SESSION["registerError"])){
            echo $_SESSION["registerError"];
            unset($_SESSION["registerError"]);
            }
        if(isset($_SESSION["emailError"])){
            echo $_SESSION["emailError"];
            unset($_SESSION["emailError"]);
        }
        if(isset($_SESSION["updateUserError"])){
            echo $_SESSION["updateUserError"];
            unset($_SESSION["updateUserError"]);
        }
        if(isset($_SESSION["deleteError"])){
            echo $_SESSION["deleteError"];
            unset($_SESSION["deleteError"]);
        }
        if(isset($_SESSION["authEmailUnCorrect"])){
            echo $_SESSION["authEmailUnCorrect"];
            unset($_SESSION["authEmailUnCorrect"]);
        }
        if(isset($_SESSION["authErrorPass"])){
            echo $_SESSION["authErrorPass"];
            unset($_SESSION["authErrorPass"]);
        }
        if(isset($_SESSION["sessionNotExist"])){
            echo $_SESSION["sessionNotExist"];
            unset($_SESSION["sessionNotExist"]);
        }
        if(isset($_SESSION["updateUser"])){
            echo $_SESSION["updateUser"];
            unset($_SESSION["updateUser"]);
        }
        if(isset($_SESSION["updateNumberError"])){
            echo $_SESSION["updateNumberError"];
            unset($_SESSION["updateNumberError"]);
        }
        if(isset($_SESSION["updateUsernameError"])){
            echo $_SESSION["updateUsernameError"];
            unset($_SESSION["updateUsernameError"]);
        }
        if(isset($_SESSION["addCategoryError"])){
            echo $_SESSION["addCategoryError"];
            unset($_SESSION["addCategoryError"]);
        }
        if(isset($_SESSION["updateCategoryError"])){
            echo $_SESSION["updateCategoryError"];
            unset($_SESSION["updateCategoryError"]);
        }
        if(isset($_SESSION["deleteCategoryError"])){
            echo $_SESSION["deleteCategoryError"];
            unset($_SESSION["deleteCategoryError"]);
        }
        if(isset($_SESSION["imgProductError"])){
            echo $_SESSION["imgProductError"];
            unset($_SESSION["imgProductError"]);
        }
        if(isset($_SESSION["ProductError"])){
            echo $_SESSION["ProductError"];
            unset($_SESSION["ProductError"]);
        }
        ?>
    </p>
    <p class="text-xl hover:text-orange-600 pt-8 text-center"><a href="/">Вернуться на главную страницу</a></p>
</div>
</main>
