<?php
$name = "";
$message ="";

if(isset($_POST['send']) == true){
    $name = $_POST["name"];
    $message = $_POST["message"];
    #テキストファイルに書き込む処理

    $fp = fopen("text.txt","a");
    fwrite($fp, $name . "t" . $message . "n");
    fclose($fp);
}
$fp = fopen("text.txt", "r");

bord_array = [];
while ($line = fgets($fp)) {
    $temp = explode("t", $line);
    $temp_array = [
        "name" => $temp[0],
        "message" => $temp[1]
    ];
    $bord_array[] = $temp_array;
}
?>