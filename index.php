<?php 
require_once 'config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Station 14 RU Wiki</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/icon.png">
</head>
<body>
    <div class="header">
        <div class="header-line">   
            <div class="logo-text">
                <a href="" name="mainpage">Space Station 14 <br> RU Wiki</a>
            </div>
            <div class="search" title="Искать в Space Station 14 RU Wiki">
                <input type="text" name="search" id="main-search" placeholder="Искать в Space Station 14 RU Wiki">
            </div>
            <div class="auth" title="Аккаунт">
                <span href="" id="user-mainpage-name">Аноним</span>
            </div>
            <div class="auth-window" hidden>
                <div class="aw-container">
                    <div class="aw-text">
                        <span>Вы не представились системе</span>
                    </div>
                    <div class="auth-button">
                        <a href="auth/login.html">Войти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="mainblock">
            <div class="mainblock-head">
                <div class="mainblock-name">
                    <h1>Заглавная Страница</h1>
                    <div class="edit-button">
                        <img src="images/pencil.png" alt="edit-button" class="edit-button-img">
                    </div>
                    <div class="reset-editting">
                        <img src="images/reset.png" alt="reset-button" class="reset-editting-img">
                    </div>
                </div>
                <div class="mainblock-buttons">
                    <a class="mainblock-buttonleft" href="">Заглавная</a>
                    <a class="mainblock-buttonleft" href="">Обсуждение</a>
                    <a class="mainblock-buttonright" href="">История</a>
                    <a class="mainblock-buttonright" href="">Просмотр Кода</a>
                </div>
            </div>
            <div class="logo">
                <img src="images/mainpage-logo.png" alt="logo">
            </div>
            <div class="middle-info">
                <div class="mainblock-info">
                    <div class="about">
                        <h2 class="about-h2">О Space Station 14</h2>
                        <p class="about-p">Space Station 14 вдохновлена культовой классикой <a href="https://spacestation13.com/">Space Station 13</a> и рассказывает историю о том, как обычная смена на космической станции пошла наперекосяк. Погрузитесь в свою роль, возитесь с проработанными системами и выживайте в хаосе в этой многопользовательской ролевой игре.</p>
                    </div>
                    <div class="community">
                        <h2>Сообщество</h2>
                        <a href="https://discord.gg/corvax"><img src="images/discord-community-link.png" alt=""></a> <br>
                        <a href="https://vk.com/ss14ru"><img src="images/vkontakte-community-link.png" alt=""></a>
                    </div>
                    <div class="help">
                        <h2 class="help-h2">Помогите! Я не могу найти руководство по X!</h2>
                        <p class="help-p">Скорее всего, его еще не существует! Вики SS14, как и большинство вики, открыта для редактирования любым желающим. Для помощи и лучшей координации обратитесь в наш <a href="https://discord.gg/corvax">Discord</a>, там имеется отдельный канал для редакторов Вики.</p>
                    </div>
                </div>
                <div class="mainblock-links">
                    <a href="">Новичкам</a> <br>
                    <a href="">Правила</a> <br>
                    <a href="">Корпоративный Закон</a> <br>
                    <a href="">Стандартные Рабочие Процедуры</a> <br>
                    <a href="">Лор</a> <br>
                    <a href="">Роли</a> <br>
                    <a href="">Карты</a> <br>
                    <a href="">Игровые Режимы</a> <br>
                    <a href="">Разработчикам</a> <br>
                </div>
            </div>
            
            <div class="manuals-button">
                <a href="">Руководства</a>
                <hr>
            </div>
            <div class="manuals">
                <a href="">Химия</a>
                <a href="">Еда</a>
                <a href="">Напитки</a>
                <a href="">Запуск Локального Сервера</a>
                <a href="">Контрабанда</a> 
                <a href="">Импланты</a>
                <a href="">Предметы</a>
                <a href="">Бумажная Работа</a>
                <a href="">Таблица Навыков</a> 
                <a href="">Новости Разработки</a>
                <a href="">Whitelist</a>                
            </div>
        </div>
    </div>
    <div class="leftmenu">
        <div class="leftmenu-logoimg">
            <a href=""><img src="images/leftlogo.svg" alt="leftlogo-svg"></a>
        </div>
        <div class="lm-links">
            <div class="lm-abouttext">Навигация</div> 
            <a href="">Заглавная Страница</a> <br>
            <a href="">Свежие Правки</a> <br>
            <a href="">Случайная Страница</a> <br>
            <a href="">Справка по MediaWiki</a> <br>
        </div>
        <div class="lm-links">
            <div class="lm-abouttext">Вики-Инструменты</div> 
            <a href="">Служебные Страницы</a>
        </div>
    </div>
    <div class="right-menu">
        <div class="rm-links">
            <div class="rm-more">Ещё</div>
            <a href="">Ссылки Сюда</a> <br>
            <a href="">Связанные Правки</a> <br>
            <a href="">Версия Для Печати</a> <br>
            <a href="">Посстояная Ссылка</a> <br>
            <a href="">Сведения О Странице</a> <br>
            <a href="">Журналы Страницы</a> 
        </div>
    </div>
    <div class='footer'>
        <div class="footer-line">
            <div class="info">
                <span>Эта страница в последний раз была отредактирована</span> <br> <br>
                <span>Содержание доступно по лицензии </span> 
                <a href="">Attribution-ShareAlike 4.0 International</a>
                <span> (если не указано иное).</span> <br> <br>
            </div>
            <div class="links">
                <a href="" class="policy">Политика Конфинденциальности</a>
                <a href="" class="about">О Space Station 14 RU Wiki</a>
                <a href="" class="noresp">Отказ от ответственности</a>
            </div>
            <div class="rightimg-links">
                <a href="https://www.mediawiki.org/wiki/MediaWiki"><img src="images/mediawiki-footer.png" alt="mediawiki-footer"></a>
                <a href="https://creativecommons.org/licenses/by-sa/4.0/"><img src="images/creativecommons-footer.png" alt="creativecommons-footer"></a>
            </div>
        </div>
    </div>
</body>
</html>

