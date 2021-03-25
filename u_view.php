<?php
  session_start();
  include("funcs.php");
  loginCheck();

$id = $_GET["id"];
$pdo =  db_connect();

$sql = "SELECT * FROM sns_contents WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view="";
if($status==false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
} else {
  $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <?php
    include('display/head.php')
  ?>
</head>
<body>

<header>
  <?php include("display/header.php"); ?>
</header>
<main class="col-6 offset-3">
  <form method="post" action="update.php" class="post">
      <p class="heading">Edit</p>
      
      <p><input type="text" name="restaurantName" value="<?=$row["restaurantName"]?>" placeholder="何をした？" class="input height50"></p>
      <p><input type="number" name="restaurantCost" value="<?=$row["restaurantCost"]?>" placeholder="何分できた？" class="input height50"></p>
      <p><textarea name="contents" id="" cols="30" rows="10" class="input height200" placeholder="内容・学び"><?=$row["contents"]?></textarea></p>
      <input type="hidden" name="updatedSysdate" value="<?=$row["updatedSysdate"]?>">
      <input type="hidden" name="id" value="<?=$row["id"]?>">
      <input type="submit" value="修正" class="inputButton"><br>
  </form>
  <a class="link" href="member.php">戻る</a>
</main>
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
