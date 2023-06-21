<!DOCTYPE html>
<html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Mission_5-1</title>
    </head>
    <body>
    <?php
$initial_name = "名前";
$initial_comment = "コメント";
$time = date("Y/m/d/H:i:s") ;
?>
<form action="" method="post">
    <div>
        <label for= "name">名前</label>
        <input type="text" id= "name" name="name" value=<?= $initial_name ?>>
        </div>
        <div>
            <label for="comment">コメント</label>
    <input type="text" id="comment" name="comment" value=<?= $initial_comment ?>>
    </div>
    <input type = "submit" name="send" value="送信" >
</form>
<?php
         $dsn = 'mysql:dbname=tb250028db;host=localhost';
    $user = 'tb-250028';
    $password = 'xKkuydz9hh';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $sql = "CREATE TABLE IF NOT EXISTS tbtest"
    ." ("
    . "id INT AUTO_INCREMENT PRIMARY KEY,"
    . "name char(32),"
    . "comment TEXT"
    .");";
    $stmt = $pdo->query($sql);
    
            $name = $_POST["name"];
            $comment = $_POST["comment"];
        
            if(!empty($name && $comment))
            if(!($name == $initial_name)&&(!($comment == $initial_comment))){
            $filename = "mission5-5.txt"; // ファイルの作成
$fp = fopen($filename,"a");
file_exists($filename);
$num = count(file($filename));
$num = $num+1;
fwrite($fp, $num."<>".$name."<>".$comment."<>".$time."<br>".PHP_EOL);
 
    fclose($fp);
if(file_exists($filename)){
    
    $lines = file($filename,FILE_IGNORE_NEW_LINES);echo "<br>";
    foreach($lines as $line){
        if((!($line==$initial_name)) && (!($line==$initial_comment))){
           $bord_aray =[];
            
            $text = explode("<>",$line);
            $text_aray=[
               $text[0],
               $text[1],
                $text[2],
                $text[3]];
                foreach($text_aray as $data){
            echo " ";}}
            
    
    $dsn = 'mysql:dbname=XXXDB;host=localhost';
    $user = 'XXXUSER';
    $password = 'XXXpassword';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $sql = "CREATE TABLE IF NOT EXISTS tbtest"
    ." ("
    . "id INT AUTO_INCREMENT PRIMARY KEY,"
    . "name char(32),"
    . "comment TEXT"
    .");";
    $stmt = $pdo->query($sql);
    
    }
    
    echo "<hr>";
     $sql = $pdo -> prepare("INSERT INTO tbtest (name, comment) VALUES (:name, :comment)");
    $sql -> bindParam(':name', $name, PDO::PARAM_STR);
    $sql -> bindParam(':comment', $comment, PDO::PARAM_STR);
    $name = "$name";
    $comment = "$comment"; 
    $sql -> execute();
      $sql = 'SELECT * FROM tbtest';
    $stmt = $pdo->query($sql);
    $results = $stmt->fetchAll();
    foreach ($results as $row){
        
        echo $row['id'].',';
        echo $row['name'].',';
        echo $row['comment'].'<br>';
    echo "<hr>";
    }}}
?>

  
    </body>
    </html>
