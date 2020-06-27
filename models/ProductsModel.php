<?php
    require_once "../config/db.php";
    /**
     *
     * Модель для таблицы продуктов
     *
     */

    /**
     *
     * Получить последние товары
     *
     * @param int|null $limit - лимит товаров
     * @return array - массив товаров
     */
    function getLastProducts(int $limit = null): array {

        global $db;
        $sql = 'SELECT * FROM products ORDER BY id DESC';

        if (!$limit) {
            $stmt = $db->prepare($sql . " LIMIT ?");
            $stmt->execute([$limit]);
            $stmt->fetchAll();
        } else {
            $stmt = $db->query($sql)->fetchAll();
        }

        return $stmt;
    }