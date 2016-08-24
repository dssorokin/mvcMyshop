<?php
/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 30.05.2016
 * Time: 23:53
 */

require_once 'data.php';

foreach ($publications as $row){
    $row->printItem();
    echo "<br>";
}