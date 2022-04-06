<?php
$name=$_POST["name"];
$Email=$_POST["Email"];
$Male=$_POST["Male"];
$Tel=$_POST["Tel"];
$food=$_POST["food"];
//$foods=implode(",",$food); //多選
$foodsize=count($food); //array count

$shirt=$_POST["shirt"];

$comment=$_POST["comment"];
$comment=strip_tags($comment);
$comment=nl2br($comment); //換行


echo "<h1>墾丁三日遊報名資料</h1>";
echo "<b>你的姓名: </b>".$name."先生/小姐<br/>";
echo "<b>你的Email: </b>".$Email."<br/>";

if($Male=='1'){
    echo "<b>你的性別: </b>男<br/>";
}else{
    echo "<b>你的性別: </b>女<br/>";
}

echo "<b>你的電話號碼: </b>".$Tel."</br>";
echo "<b>你的飲食偏好: </b>".$food[0]."<br/>";
//echo "<b>你的飲食偏好: </b>".$foods."<br/>"; //輸出多選



for($i=0;$i<foosize;$i++){
    if($i==0){
        echo $food[$i];
    }else{
        echo ",".$food[$i];
    }
    
}

echo "<b>建議: </b>".$comment."<br/>";

echo $_FILES["uphoto"]["name"]."<br/>"; //檔名
echo $_FILES["uphoto"]["tmp_name"]."<br/>";//暫存位置
echo $_FILES["uphoto"]["size"]."<br/>";//檔案大小
echo $_FILES["uphoto"]["type"]."<br/>";//檔案型態

copy($_FILES["uphoto"]["tmp_name"], $_FILES["uphoto"]["name"]);
?>
