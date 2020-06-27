<?php

    /*
        Контроллер главной страницы
    */

    require_once "../models/CategoriesModel.php";
    require_once "../models/ProductsModel.php";

    function testAction() {
        echo 'IndexController > testAction';
    }

    function indexAction(Smarty $smarty) {

        $rsCategories = getAllMainCatsWithChildren();
        $rsProducts = getLastProducts(16);

        $smarty->assign("pageTitle", "Главная страница сайта");
        $smarty->assign("rsCategories", $rsCategories);
        $smarty->assign("rsProducts", $rsProducts);

        loadTemplate($smarty, "header");
        loadTemplate($smarty, "index");
        loadTemplate($smarty, "footer");
    }