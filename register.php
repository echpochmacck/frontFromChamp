<?php
include('header.php')
?>
<main class="sticked ">
    <div class="stick"></div>
    <div class="stick stick-2"></div>

    <section class="s_login">
        <div class="container f-c a-c g-50 p-50">
            <h1 class="s_title">Регистрация</h1>
             <form action="#" class="d-flex f-c a-c g-50 w-100">
                <label class="d-flex f-c a-c g-20 w-100">
                    E-mail
                    <input type="email" class="form_control is_invalid" placeholder="email" require>
                    <div class="fb_invalid">Нужно заполнить</div>

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                   Фамилия
                    <input type="text" class="form_control is_invalid" placeholder="фамиилия" require>
                    <div class="fb_invalid">Нужно заполнить</div>

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                   Имя
                    <input type="text" class="form_control is_valid" placeholder="имя" require value="Максим">
                    <div class="fb_valid">все верно</div>

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                   Дата рождения
                    <input type="date" class="form_control is_invalid" placeholder="дата рождения" require >
                    <div class="fb_invalid">нужно заполнить</div>

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                   Номер телефона 
                    <input type="tel" class="form_control is_invalid" placeholder="номер телефона" require >
                    <div class="fb_invalid">нужно заполнить</div>

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                    Пароль
                    <input type="password" class="form_control is_valid" placeholder="пароль" value="123123">

                    <div class="fb_valid">все верно</div>
                   

                </label>
                <label class="d-flex f-c a-c g-20 w-100">
                    Повтор пароля
                    <input type="password" class="form_control is_invalid" placeholder="повторите пароль" value="2313213123123123">

                    <div class="fb_invalid">Должен совпадать с полем "Пароль"</div>
                   

                </label>
                <div class="d-flex a-c g-20">
                    <label for="confirm">Согласие на обработку персональных данных</label>
                        <input type="checkbox" id="confirm">
                </div>
                    <button class="btn">Отправить</button>


            </form>
        </div>
    </section>

    
</main>
<?php
include('footer.php')
?>