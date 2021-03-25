<?php
  session_start();
  include_once("funcs.php");

  $pdo = db_connect();

    if(isset($_POST['submit']) ){
        $todo_contents = $_POST['todo_contents'];
        $deadline = $_POST['deadline'];

        $sql = "INSERT INTO todo (id, todo_contents, deadline) VALUES (NULL, :todo_contents, :deadline)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':todo_contents', $todo_contents, PDO::PARAM_STR);
        $stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);

        $stmt->execute();

    }elseif(isset($_POST['delete'])){
        $id = $_POST['id'];
        $stmt = $pdo->prepare("delete from todo where id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <style>
      input {
        width: 80%;
      }
    </style>
</head>

<body class="container">
    <h2>Todo List</h2>
    <form method="post" action="">
        <input type="text" name="todo_contents" value="" class="m-1"><br>
        <input type="date" name="deadline"><br>
        <input type="submit" name="submit" value="Add" class="inputButton m-2" width="80%">
    </form>
    <h3>Current Todos</h3>
    <table class="table table-striped">
        <therad>
          <tr>
            <th>Task</th>
            <th>Deadline</th>
            <th></th>
          </tr>
        </therad>
        <tbody>
          <?php
              $stmt = $pdo->prepare("SELECT * FROM todo ORDER BY deadline ASC");
              $stmt->execute();
              
              foreach($stmt as $row) {

          ?>
            <tr>
                <!-- 自分のものだけ表示するようにすべき -->
                <td><?= htmlspecialchars($row['todo_contents']) ?></td>
                <td><?= htmlspecialchars($row['deadline']) ?></td>
                <td>
                    <form method="POST">
                        <button type="submit" name="delete"  class="btn btn-danger">Delete</button>
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="hidden" name="delete" value="true">
                    </form>
                </td>
            </tr>
          <?php
              }
          ?>
        </tbody>
    </table>
</body>
</html>