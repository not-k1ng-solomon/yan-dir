<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
echo mb_internal_encoding();
function dump($item){
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
}
$file = file_get_contents("yandex_direct.json");
$json =json_decode($file);
$i=1;
foreach ($json as $item){
    echo $i.") ".$item->theme."<br><a href='>".$item->url."'>ссылка на ответ</a><br><br>";
    $i++;
}
//var_dump($json);
