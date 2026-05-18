<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PDO連線</title>
</head>

<body>
     <h3>PDO連線</h3>
     <?php
     $dsn="mysql:host=localhost;charset=utf8;dbname=school";
     $pdo=new PDO($dsn,'root','');

     $sql="SELECT * FROM `dept`";

     $depts=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

     echo "<pre>";
     print_r($depts);
     echo "</pre>";

     $sql_insert="INSERT INTO `dept` (`code`,`name`) VALUES('601','中餐科')";
     //$pdo->exec($sql_insert);
     echo "<h3>新增資料</h3>";
     echo $sql_insert;
     echo "<hr>";
     $depts=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
     echo "<pre>";
     print_r($depts);
     echo "</pre>";

     echo "<h3>更新資料</h3>";
     $sql_update="UPDATE `dept` SET `code`='602' , `name`='西餐科' WHERE `id`='8'";
     $pdo->exec($sql_update);
     echo $sql_update;
     echo "<hr>";
     $depts=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
     echo "<pre>";
     print_r($depts);
     echo "</pre>";

     echo "<h3>刪除資料</h3>";
     $sql_delete="DELETE FROM `dept` WHERE `id`='9'";
     $pdo->exec($sql_delete);
     echo $sql_delete;
     echo "<hr>";
     $depts=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
     echo "<pre>";
     print_r($depts);
     echo "</pre>";

     ?>

     <P>&nbsp;</P>
     <P>&nbsp;</P>
     <P>&nbsp;</P>
     <P>&nbsp;</P>
     <P>&nbsp;</P>
     <P>&nbsp;</P>



</body>

</html>