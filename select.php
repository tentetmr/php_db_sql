<?php
$pdo =  db_connect();

$stmt = $pdo->prepare("SELECT * FROM sns_contents order by indate DESC");
$status = $stmt->execute();

$view="";
if($status==false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
} else {
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<div class='postBlock'>";
    $view .= $result["u_name"]."　";
    $view .= "「".$result["restaurantName"]."」　";
    $view .= $result["restaurantCost"]."分　";
    $view .= $result["indate"];
    $view .= "<div class='postImpression'>";
    $view .= "<p>".$result["contents"]."</p>";
    $view .= "</div>";
    
    if($result["u_name"] == $_SESSION["u_name"]){
      $view .= '<a href="u_view.php?id='.$result["id"].'" class="link">';
      $view .= "更新　";
      $view .= "</a>";
      $view .= '<a href="delete.php?id='.$result["id"].'" class="link">';
      $view .= "削除";
      $view .= "</a>";
    }  
    $view .= "</div>";
  }

}
?>
