<?php
include('./db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css"><!--https://www.youtube.com/watch?v=E-DNlHs4BEo-->
    <link rel="stylesheet" href="css/fontello-embedded.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <header>
        <div class="container"></div>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
        
                
                <div class="menu active text-uppercase">
                    <nav>
                        <li><a href="#about">О курсі</a></li>
                        <li><a href="#forwhom">КУРС ДЛЯ ТИХ, ХТО</a></li>
                        <li><a href="#schedule">ПРОГРАМА КУРСА</a></li>
                        <li><a href="#learning">Процес навчання</a></li>
                        <li><a href="#author">ОБ АВТОРІ</a></li>
                        <li><a href="#feedback">Відгукі О КУРСі</a></li>
                    </nav>
                </div>  
            </div>
            <div class="row">
                <div class="col-12">
                      <h1 class="text-center text-white">Уроки для починающих окунятників</h1>
                         <div class="itd_play" data-bs-toggle="modal" data-bs-target="#exampleModal">
                             <div class="itd_triangle"></div>
                         </div>
                
                <a href="#learning" class="btn btn-itd btn-lg btn-uppercase">замовити</a>             <!--#footer прокрутка, lg размер кнопки, upperc заглавные-->
            </div>
        </div>
    </header>
   <!--<div>lorem5000</div>-->
    <section class="about" id="about"><!--.container>.row>.col-12-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h2 class="text-center text-uppercase color1 mb-5">о курсі</h2>
                </div>
            </div>
            <div class="row">
<?php
$result = mysqli_query(
    mysql: $conn,
    query: 'SELECT id, name FROM pages ORDER BY id ASC LIMIT 9 OFFSET 0;'
);

while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="itd_circle"><i class="icon-emo-grin"></i></div>
        <h5 class="text-center">'.$row['name'].'</h5>
        <div class="line"></div>
    </div>';
}
?>
            </div>
        </div>
    </section>
    <section class="forwhom" id="forwhom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-uppercase color2 mb-5">курс для тИх, ХТо</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">хоче навчитися ловити рибу</h5>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">вчитися сучасним методам лову</h5>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">ще нічого не вміє, але хоче навчитися</h5>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h5 class="text-center">хоче досягти високих результатів</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#footer"class="btn btn-lg text-uppercase btn-itd">Замовити</a>
                </div>
            </div>
        </div>
    </section>
<section class="schedule" id="schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-uppercase color1 mb-3">Программа курса</h2>
            </div>
        </div>
        <div class="row">
            <!--первый столбец-->
            <div class="col-md-4 col-sm-12">
                    <h4 class="text-center fw-bold mb-3 mt-3">Модуль 1<br>(HTML)</h4>
                        <!--первый аккордеон-->
                <div class="accordion" id="accordion1">
                        <!--открытый элемент-->
                    <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              вступ
                            </button>
                          </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"        data-bs-parent="#accordion1">
                            <div class="accordion-body fst-italic">
                                Короткий огляд курсу
                            </div>
                        </div>
                    </div>
                        <!--закрытые элементы-->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                купівля спінінга
                            </button>
                            </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion1">
                            <div class="accordion-body fst-italic">
                            на цьому уроці навчимося збирати снасті
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            огляд функціоналу котушки
                        </button></h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"  data-bs-parent="#accordion1">
                            <div class="accordion-body fst-italic">
                            види шнурів
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Ннавчимося вибірати застібки
                            </button></h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"  data-bs-parent="#accordion1">
                            <div class="accordion-body fst-italic">
                                огляд флюрів
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--конец первого аккордеона-->

            <div class="col-md-4 col-sm-12">
                <h4 class="text-center fw-bold mb-3 mt-3">Модуль 2<br>(HTML)</h4>
                    <!--2 аккордеон-->
                <div class="accordion" id="accordion2">
                    <!--открытый элемент-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                          огляд курсу
                        </button>
                      </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"        data-bs-parent="#accordion2">
                                <div class="accordion-body fst-italic">
                                 доклад про аспекти риболовлі з човна
                                </div>
                            </div>
                    </div>
                    <!--закрытые элементы-->
                        <div class="accordion-item">
                                 <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"     data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Вага грузил
                                    </button>
                                </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordion2">
                                <div class="accordion-body fst-italic">
                                    види грузил, фактура,розміри
                                </div>
                            </div>
                        </div>
                    <!--закрытые элементы-->
                        <div class="accordion-item">
                                <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"     data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Залежність товщини волосіння від течії
                               </button>
                                </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordion2">
                                <div class="accordion-body fst-italic">
                                    розгляд видів течій за напрямком та силою
                                </div>
                            </div>
                        </div>
                    <!--закрытые элементы-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"     data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            постановка на точку ловлі
                            </button>
                                </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordion2">
                                <div class="accordion-body fst-italic">
                                    Нположення човна по течії та вітру
                                </div>
                            </div>
                        </div>
                    <!--закрытые элементы-->
                </div>
            </div>
            <!--конец 3го аккордеона-->
            <div class="col-md-4 col-sm-12">
                <h4 class="text-center fw-bold mb-3 mt-3">Модуль 3<br>(HTML)</h4>
                    <!--3 аккордеон-->
                <div class="accordion" id="accordion3">
                    <!--открытый элемент-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                            погодні умови
                        </button>
                      </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"        data-bs-parent="#accordion3">
                                <div class="accordion-body fst-italic">
                                 ловля в дощ, сніг, мороз
                                </div>
                            </div>
                    </div>
                    <!--закрытые элементы-->
                        <div class="accordion-item">
                                 <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"     data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Обмерзання спінінга
                                    </button>
                                </h2>
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordion3">
                                <div class="accordion-body fst-italic">
                                    Очищення кілець від льоду
                                </div>
                            </div>
                        </div>
                    <!--закрытые элементы-->
                        <div class="accordion-item">
                                <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"     data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    Товщина шнура
                               </button>
                                </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordion3">
                                <div class="accordion-body fst-italic">
                               на цьома занятті розглянемо шнури
                                </div>
                            </div>
                        </div>
                    <!--закрытые элементы-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"     data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            підбір приманок
                            </button>
                                </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordion3">
                                <div class="accordion-body fst-italic">
                                    вібір приманки залежно від водойми
                                </div>
                            </div>
                        </div>
                    <!--закрытые элементы-->
                </div>
            </div>
        </div>
    </div>

</section>

<section class="learning" id="learning">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center text-uppercase color2 mb-5">Процес навчання</h2>
        </div>
    </div>
            <div class="row align-items-center mb-5">
                 <div class="col-lg-9 col-sm-12">
                     <h5>Курс доступний в спец ТГ-каналі</h5>
                    <h5>Можно навчатися в спеціальній групі</h5>
                    <h5>Курс коштує 1грн</h5>
                    <h5>Можна придбати<a href="https://ua.korrespondent.net/" target="_blank">тут</a></h5>
                    <h5>Відео курса на ТГ</h5>
                </div>
                    <div class="col-lg-3 col-sm-12 mb-sm-5 mt-sm-5 text-center">
                        <img src="img/smartmockups_lfii6bir.png" alt="процесс обучения" class="img-fluid">
                    </div>
            </div>
                <div class="row">
                    <div class="col-12">
                         <a href="#footer" class="btn btn-itd btn-lg btn-uppercase">замовити</a>
                    </div>
                </div>
</div>
</section>
<section class="author" id="author">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center text-uppercase color1 mb-5">об авторе</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-9 col-lg-12">
            <h4>Бармалей</h4>
            <p>Окунятник та початківець з кодування HTML, CSS та PHP</p>
            <p>1992р, закінчив курси програмування на Бейсіку</p>
            <p>Створюю сайт про риболовлю, як лабораторну роботу</p>
        </div>
        <div class="col-xl-3 col-lg-12 text-center">
            <img src="img/окунь-белый фон.png" alt="Бармалей" class="img-fluid itd_img">
        </div>
    </div>
</div>
</section>
<section class="feedback" id="feedback">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-uppercase color2 mb-5">Відгукі про курс</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="img/avatar.png" alt="avatar" class="rounded-circle img-fluid itd_avatar">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h4>Анонім</h4>
                <P>Дякую, дізнався багато нового, що стане в нагоді при ловлі хижака, та дозволить спіймати більше риби.</P>
                <P>Дослідки пізнати ази з інших джерел не приносили такої користі.</P>
            </div>
            <div class="line"></div>
        </div>
    </div>
</section class="buy">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center text-uppercase color1 mb-5">Придбати</h2>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 col-sm-12">
            <img src="img/сабанеев.png" alt="hhh" class="img-fluid mx-auto d-block itd_saban">
<!--здесь указываем ссылку сгенерированной кнопки оплаты-->
            <p>После того, как нажмете отправить, на сл стр заполните поля. Номер телефона</p>
        </div>
        <form action="send.php" method="post">
        <h1>Форма обратной связи</h1>
    <p>
        <label for="email">Почта</label><br>
        <input type="email" name="email" id="email" placeholder="введіть email" required/>
    </p>
    <p>
        <label for="name">name</label><br>
        <input type="text" name="name" id="name" placeholder="input name" required/>
    </p>
    <p>
        <label for="message">message</label><br>
        <textarea id="message" name="message" rows="10" cols="40" placeholder="input text"></textarea>
    </p>
        <!--<button type="submit">send</button>-->
        <input type="submit" value="send form">
    </form>
    </div>
</div>
<section>

</section>
<!--<div>lorem5000</div> создать 5000 текста-->
   <footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <a href="https://www.youtube.com/watch?v=aBfovmPLkJ4" target="_blank" class="btn btn btn-outline-light"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                  </svg></i></a>
            </div>
        </div>
    </div>
    </footer>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><!--https://www.youtube.com/watch?v=sFRrfUt7jc0&t=689s-->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Уроки для починающих окунятників</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div class='embed-container'><iframe src='https://www.youtube.com/embed//aBfovmPLkJ4' frameborder='0' allowfullscreen></iframe><!--код для видео взят с https://embedresponsively.com/-->
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script>
        $('.burger').click(function(){
    $('.burger span:nth-child(1)').toggleClass('first');
    $('.burger span:nth-child(2)').toggleClass('middle');
    $('.burger span:nth-child(3)').toggleClass('bottom');
        });
      </script>
<script src="js/bootstrap.bundle.min.js"></script>   
<script>
    let menuBtn = document.querySelector('.burger');
let menu = document.querySelector('.menu');

menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
})
</script>
</body>
</html>
