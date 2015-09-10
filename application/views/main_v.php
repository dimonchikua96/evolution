


<div class="middle">
    <div class="content">

        <div>
                <span class="main_cat">
                         Статьи
                </span>
            <?
            foreach($articles as $value){
                echo  "<a class='blue_link' href='".base_url()."main/articles/".$value['id']."' title='".$value['short_name']."'>".$value['name']."</a><br><br>";
            }
            ?>
        </div>
        <div class="center_div2">
                 <span class="main_cat">
                         Педагоги
                    </span>
            <?
            foreach($instructors as $value){
                echo  "<a class='blue_link' href='".base_url()."main/instructors#teacher_".$value['id']."'>".$value['name'].' '.$value['surname']."</a><br><br>";
            }
            ?>
        </div>
        <div>
                <span class="main_cat">
                         Контакты
                    </span>

            <span class="blue_link">Адрес:</span>
            <p class="address_main"><?=$address['address'];?></p></br>
            <span  class="blue_link">Телефоны:</span >
            <p class="address_main"><?=$address['phone1'];?></br>
                <?=$address['phone2'];?></p></br>
            <span  class="blue_link">E-mail:</span >
            <p class="address_main" style="color: #ffffff important;"><?=$address['mail1'];?></p></br>

        </div>

    </div>
</div><!-- .middle-->


<div class="middle">
    <div class="content">

            <div>
                <span class="main_cat">
                         Статьи
                </span>
                <?
                    foreach($articles as $value){
                        echo  "<a class='blue_link' href='".base_url()."main/articles/".$value['id']."' title='".$value['short_name']."'>".$value['name']."</a><br><br>";
                }
                ?>
            </div>
            <div class="center_div2">
                 <span class="main_cat">
                         Педагоги
                    </span>
                <?
                    foreach($instructors as $value){
                        echo  "<a class='blue_link' href='".base_url()."main/instructors#teacher_".$value['id']."'>".$value['name'].' '.$value['surname']."</a><br><br>";
                }
                ?>
            </div>
            <div>
                <span class="main_cat">
                         Контакты
                    </span>

                <span class="blue_link">Адрес:</span>
                <p class="address_main"><?=$address['address'];?></p></br>
                <span  class="blue_link">Телефоны:</span >
                <p class="address_main"><?=$address['phone1'];?></br>
                    <?=$address['phone2'];?></p></br>
                <span  class="blue_link">E-mail:</span >
                <p class="address_main" style="color: #ffffff important;"><?=$address['mail1'];?></p></br>

            </div>

    </div>
</div><!-- .middle-->
<div class="middle">
    <div class="content">
        <form id="msg_form">
            <div>
                <span class="main_cat">
                    Обратная связь
                </span>
                <p class="address_main" align="justify">
                    Чтобы связаться с нами, Вы можете заполнить
                    форму обратной связи и
                    задать любой интересующий Вас вопрос.</br></br>
                    Либо позвоните нам по телефону:</br>
                    &nbsp&nbsp&nbsp<?=$address['phone1'];?></br>
                    &nbsp&nbsp&nbsp<?=$address['phone2'];?>

                </p></br>
            </div>
            <div class="center_div3">
                <input type="text" class="callback blue" id="you_name" name="you_name" placeholder="Ваше имя">
                <input type="text" class="callback blue" id="you_phone" name="you_phone" placeholder="Ваш телефон">
                <input type="text" class="callback blue" id="you_mail" name="you_mail" placeholder="Ваш e-mail">
            </div>
            <div>
                <textarea class="blue" name="you_message" id="you_message" spellcheck="false"></textarea></p>
                <button id='send_msg' class="read_more">Отправить</button>
            </div>
        </form>
    </div>
</div><!-- .middle-->
