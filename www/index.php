<?php
    require_once "../config/config.php"; //Инициализация настроек
    require_once "../config/db.php"; // Инициализация базы данных
    require_once "../library/mainFunctions.php"; // Основные функции

    //Определяем контроллер
    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

    //Определяем действие
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
    //debug($smarty);

    loadPage($smarty, $controllerName, $actionName);