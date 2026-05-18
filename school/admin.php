<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>後台管理</title>
     <style>

     </style>
</head>

<body>
     <nav class="navber">
          <div class="nav-container">
               <a href="index.html" class="nav-logo">
                    <span>翠園高中</span>
               </a>
               <ul class="nav-links">
                    <li><a href="#about">關於我們</a></li>
                    <li><a href="#new">最新消息</a></li>
                    <li><a href="#contact">聯絡方式</a></li>
               </ul>
               <div class="nav-buttons">
                    <a href="logout.php" class="btn-login">登出</a>
               </div>
          </div>
     </nav>
     <main class='main-content'>
$inc=(isset($_GET['inc']))?$_GET['inc']:'classrooms';
$file="./include/".$inc.".php";
if(file_exists($file)){
    include $file;
}else{
    include "./include/classrooms.php";      

}
?>
     </main>

</body>

</html>