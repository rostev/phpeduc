<?php

    /*
     * Основные функции
     */

    /**
     * Форматирование запрашиваемой страницы
     *
     * @param Smarty smarty - объект шаблонизатора smarty
     * @param string $controllerName - имя контроллера
     * @param string $actionName - имя действия обработки страницы
     */

    function loadPage(Smarty $smarty, string $controllerName, string $actionName = 'index'): void {
        require_once PathPrefix . $controllerName . PathPostfix;

        $action = $actionName . 'Action';

        $action($smarty);
    }

    /**
     * @param $smarty - объект шаблонизатора
     * @param $templateName - имя файла шаблона
     */
    function loadTemplate($smarty, $templateName) {
        $smarty->display("{$templateName}" . TemplatePostfix);
    }

    /**
     *
     * Функция отладки
     *
     * @param null $value - переменная для вывода на страницу
     * @param int $die - остановка работы скрипта
     */
    function debug($value = null, $die = 1) {
        echo "Debug: <br><pre>";
        print_r($value);
        echo "</pre><hr>";
        if ($die) {
            die;
        }
    }