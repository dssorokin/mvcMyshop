<?php
/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 31.05.2016
 * Time: 4:55
 */

class News
{
    public static function getNewsItemById($id)
    {

    }

    public static function getNewsList()
    {

        $pdo = Db::getConnection();

        $newsList = array();

        $result = $db->query("SELECT * FROM publication");

        $i = 0;
        $data = $db->query("SELECT * FROM publication")->fetchAll();
        print_r($data);

        die();
        while($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['content'] = $row['author_name'];
            $newsList[$i]['preview'] = $row['preview'];
            $newsList[$i]['type'] = $row['type'];

            $i++;
        }

        return $newsList;
    }
}