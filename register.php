<?php
include("funcs.php");

if(
  !isset($_POST["u_name"]) || $_POST["u_name"]==""||
  !isset($_POST["lid"]) || $_POST["lid"]==""||
  !isset($_POST["lpw"]) || $_POST["lpw"]==""
){
  exit('ParamError');
}

$u_name = $_POST["u_name"];
$lid    = $_POST["lid"];
$lpw    = $_POST["lpw"];

$pdo =  db_connect();

$sql = "INSERT INTO sns_user(id, u_name, u_id, u_pw, life_flg, indate )VALUES(NULL, :a1, :a2, :a3, 0, sysdate())";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':a1', $u_name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $lid,    PDO::PARAM_STR);
$stmt->bindValue(':a3', $lpw,    PDO::PARAM_STR);

$status = $stmt->execute();

if($status==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  header("Location: registered.php");
  exit;
  
}
?>