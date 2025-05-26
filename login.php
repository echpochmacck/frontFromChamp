<?php
include('header.php')
?>
<main class="sticked">
    <div class="stick"></div>
    <div class="stick stick-2"></div>

    <section class="s_login">
        <div class="container f-c a-c g-50">
            <h1 class="s_title">Авторизация</h1>
             <form action="#" class="d-flex f-c a-c g-50 w-100">
                <label class="d-flex f-c a-c g-20 w-100">
                    E-mail
                    <input type="email" class="form_control" placeholder="email">
                   

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                    Пароль
                    <input type="password" class="form_control" placeholder="пароль">
                   

                </label>
                <div class="d-flex f-c a-c g-20 w-100">
                    <div class="btn">Войти</div>
                <a href="#" class="d-block">Забыли пароль?</a>
                </div>


            </form>
        </div>
    </section>

    
</main>
<?php
include('footer.php')
?>