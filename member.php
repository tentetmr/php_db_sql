<?php
  session_start();
  include_once("funcs.php");
  loginCheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<?php
    include('display/head.php')
  ?>
</head>
<body>
  <header class="mb-3">
    <?php
      include("display/header.php");
    ?>
    <a href="logout.php" class="link">ログアウト</a>
  </header>
  <main>
<!-- 投稿エリア -->
<div class="container">
</div>
<div class="container ">
  <div class="row">
    <div class="col-md-4">
      <?php
        include('todo.php');
      ?>
      <canvas id="myChart" width="300px" height="auto"></canvas>

    </div>

    <div class="col-md-8">
      <form method="POST" action="insert.php" class="post">
        <p><input type="text" name="restaurantName" placeholder="何をした？" class="input height50"></p>
        <p><input type="number" name="restaurantCost" placeholder="何分できた？" class="input height50"></p>
        <p><textarea name="contents" id="" cols="30" rows="10" placeholder="内容・学び" class="input height200"></textarea></p>
        <input type="submit" value="投稿" class="inputButton">
      </form>
    
      <!-- 投稿表示エリア -->
      <div class="postContents">
      <?php
      include("select.php");
      echo $view;
      ?>
      </div>
      </div>
  </div>
</div>
<div class="container">
</div>
</main>
<!-- フッターエリア -->
<footer>
  <?php
    include("display/footer.php");
  ?>
  
</footer>
  <?php
    include("display/script.php");
  ?>
</body>
</html>