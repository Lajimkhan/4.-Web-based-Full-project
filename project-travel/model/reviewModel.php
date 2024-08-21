<?php
require_once('db.php');

function command($data){
    $conneciton = get_connection();
    $sql = "INSERT INTO package (eviewer_Name, rating, review_Title,review_Content)
    VALUES ('{$data['eviewer_Name']}', '{$data['rating']}','{$data['review_Title']}', {$data['review_Content']})";
    $result = mysqli_query($conneciton, $sql);
    return $result;
}





?>