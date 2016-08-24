<?php
/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 30.05.2016
 * Time: 23:52
 */


require_once 'classes.php';

$publications = array();


$con = mysqli_connect('localhost','root','','testsite');
$result = mysqli_query($con,"SELECT * FROM publication;");

while($row = mysqli_fetch_array($result)){
    $publications[] = new $row['type']($row);
}


