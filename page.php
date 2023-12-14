<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page</title>
</head>
<body>
  <a href="?exit">Exit</a>

  <?
    $db = new PDO ("mysql:host=localhost;dbname=login", "root", "");
    $info = [];
    if ($query = $db->query("SELECT * FROM `tags` WHERE tag LIKE '<h1>%'")) {
      $info = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
      print_r($db->errorInfo());
    }
    foreach ($info as $DATA):
      echo $DATA['tag'] .'<br>';
    endforeach;
    if(isset($_GET['exit'])){
      session_start();
      $_SESSION['login'] = '';
      header('Location: index.php');
      session_destroy();
      exit();
    }
  ?>
</body>
</html>