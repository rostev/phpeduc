<?php
    require_once "../config/db.php";
    /**
     * Модель для таблицы "Категории"
     */

    /**
     *
     * Получить дочерние категории для catId
     *
     * @param int $catId - ID категории
     * @return array - массив дочерних категорий
     */
    function getChildrenForCat(int $catId) {
        global $db;
        $stmt = $db->prepare('SELECT * FROM categories WHERE parent_id = ?');
        $stmt->execute([$catId]);
        $categories = $stmt->fetchAll();

        /*        echo "<pre>";
                print_r($categories);
                echo "<br>";*/

        return $categories;
    }

    /**
     *
     * Получить главные категории с привязками дочерних
     *
     * @return array - массив категорий
     */
    function getAllMainCatsWithChildren(): array {
        global $db;
        $stmt = $db->query('SELECT * FROM categories WHERE parent_id = 0')
            ->fetchAll();

        $smartyRs = array();

        foreach ($stmt as $k => $v) {
            $rsChildren = getChildrenForCat($v['id']);

            if ($rsChildren) {
                $v['children'] = $rsChildren;
            }

            $smartyRs[] = $v;
        }

        /*        while ($row = $stmt->fetch()) {
                    echo '<pre>';
                    print_r($row);
                }*/

        return $smartyRs;
    }