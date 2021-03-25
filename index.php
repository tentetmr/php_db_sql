<!DOCTYPE html>
<html lang="ja">
<head>
  <?php
    include('display/head.php')
  ?>
</head>

<body>
  <header>
    <div class="headerLogin">
    <?php
    include("display/header.php");
    ?>
    </div>
  </header>

  <main class="col-6 offset-3">
    <div class='intro'>
      目標を達成したい方のための学習記録アプリです！<br>他に頑張っている人たちも掲示板で見ることができます！
    </div>
  

    <div class="heading">Login</div>
      <div class="loginForm">
        <form method="post" action="login_act.php" class="post">
          <p><input type="text" name="lid" placeholder="ログインID" class="input height50"></p>
          <p><input type="password" name="lpw" placeholder="パスワード" class="input height50"></p>
          <input type="submit" value="ログイン" class="inputButton height50">
        </form>
      </div>

      <p><button class="registrationButton">会員登録がまだの方</button></p> 

      <div class="registrationForm">
        <p class="heading">Register</p>

        <form method="post" action="register.php" class="post">
          <p><input type="text" name="u_name" placeholder="ユーザ名" class="input height50"></p>
          <p><input type="text" name="lid" placeholder="ログインID" class="input height50"></p>
          <p><input type="password" name="lpw" placeholder="パスワード" class="input height50"></p>
          <input type="submit" value="会員登録" class="inputButton height50">
        </form>
      </div>
  </main>

  <footer>
    <?php
      include("display/footer.php");
    ?>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(".registrationButton").on("click",function(){
      $(".registrationForm").slideDown(500);
    });
  </script>

</body>
</html>