<?php
include('header.php')
?>
<main class="sticked ">
    <div class="stick"></div>
    <div class="stick stick-2"></div>

    <section class="s_login">
        <div class="container f-c a-c g-50 p-50">
            <h1 class="s_title">Добавить игру</h1>
             <form action="#" class="d-flex f-c a-c g-50 w-100">
                <label class="d-flex f-c a-c g-20 w-100">
                    Название
                    <input type="text" class="form_control is_invalid" placeholder="название" require>
                    <div class="fb_invalid">Нужно заполнить</div>

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                   Жанр
                     <select name="genre" id="genre" class="form_control">
                        <option value="_" disabled>Выбереье жанр</option>
                        <option value="1">Файтинг</option>
                        <option value="2">Экшн/RPG</option>
                        <option value="2">Приключенческий экшен</option>
                    </select>

                </label>
                <div class="d-flex  a-c c-b g-20">
                    <input type="file" class="d-none" id="file1">
                    <input type="file" class="d-none" id="file2">
                    <input type="file" class="d-none" id="file3">
                    <label for="file1" class="label_file">Изображение</label>
                    <label for="file2" class="label_file">Изображение</label>
                    <label for="file3" class="label_file">Изображение</label>
                </div>
                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                   Компания разработчик
                    <input type="text" class="form_control " placeholder="Компания разработчик" require >

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                   Компания разработчик
                    <input type="text" class="form_control " placeholder="Компания разработчик" require >

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                   Описание 
                    <input type="text" class="form_control " placeholder="описание" >

                </label>
                 <label class="d-flex f-c a-c g-20 w-100">
                   Стоимость 
                  <input type="number" class="form_control" placeholder="стоимость">

                </label>
               
                    <button class="btn">Отправить</button>


            </form>
        </div>
    </section>

    
</main>
<?php
include('footer.php')
?>