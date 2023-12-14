<?
$base_name = "localhost";
$base_login = "root";
$base_pass = "";
$base_data = "login";
$link = mysqli_connect($base_name, $base_login, $base_pass, $base_data); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h2>Регистрация</h2>
  <form action="" method="get">
    Логин<br>
    <input name="rlogin"><br>
    Пароль<br>
    <input name="rpassword" type="password"><br>
    Подтвердите пароль<br>
    <input name="rrpassword" type="password"><br>
    <input type="button" value="Random Password" onclick="randomPassword()">
    <input type="submit">
    <div id="random"></div>
  </form>
  <? 
  if($_GET['rpassword'] == $_GET['rrpassword']){
    if (!empty($_GET['rlogin']) and !empty($_GET['rpassword'])) {
      $rlogin = $_GET['rlogin'];
      $rpassword = $_GET['rpassword'];
      $rpassword = md5($rpassword);
      $query = "INSERT INTO log SET login='$rlogin', password='$rpassword'";
      mysqli_query($link, $query);
      echo 'True';
    }
  } else {
    echo '-';
  }
  ?>
  <script>
    function randomPassword(){
      var char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!%?*_+=';
      var pass = "";
      for(let i = 0; i <= 16; i++){
        pass += char.charAt(Math.floor(Math.random() * char.length));
      }
      console.log(pass);
      var block = document.getElementById('random');
      var calcres = document.createElement('p');
      var textappend = document.createTextNode(pass);
      block.appendChild(calcres);
      calcres.appendChild(textappend);
    }
  </script>

  <h2>Авторизация</h2>
  <form action="" method="get">
    Логин<br>
    <input name="login"><br>
    Пароль<br>
    <input name="password" type="password"><br>
    <input type="submit">
  </form>

  <? 
    if (!empty($_GET['password']) and !empty($_GET['login'])) {
      $login = $_GET['login'];
      $password = $_GET['password'];
      $password = md5($password);
      
      $query = "SELECT * FROM log WHERE login='$login' AND password='$password'";
      $res = mysqli_query($link, $query);
      $user = mysqli_fetch_assoc($res);
      
      if (!empty($user)) {
        session_start();
        $_SESSION['login'];
        header('Location: page.php');
        echo "+";
        exit();
      } else {
        echo "err";
      }
    }
  ?>
</body>
</html>