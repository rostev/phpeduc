<?php

    /*
        Контроллер главной страницы
    */

    function testAction() {
        echo 'IndexController > testAction';
    }

    function indexAction(Smarty $smarty) {
        $smarty->assign("pageTitle", "Главная страница сайта");

        loadTemplate($smarty, "header");
        loadTemplate($smarty, "index");
        loadTemplate($smarty, "footer");
    }