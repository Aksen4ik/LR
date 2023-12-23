<? 
$base_name = "localhost"; 
$base_login = "root"; 
$base_pass = "root"; 
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
<h2>Сброс пароля</h2> 
<form action="" method="get"> 
  user <br> 
  <input type="text" name="login"><br> 
  New pass <br> 
  <input type="password" name="new"><br> 
  Confirm pass <br> 
  <input type="password" name="new2"><br> 
  <input type="submit" value="Send"> 
</form> 
<? 
$user = $_GET['login']; 
$new = $_GET['new']; 
$new2 = $_GET['new2']; 
 
if(!empty($new) && !empty($user) && strlen($new) > 8 && preg_match('/[A-Z0-9~`!@#$%\^&*()_\-+={|:;<,>.?\/]/', $new)){ 
  if($new == $new2) { 
    $new = md5($new); 
    $query = "UPDATE log SET password='$new' WHERE login='$user'"; 
    $res = mysqli_query($link, $query); 
    $pass = mysqli_fetch_assoc($res); 
    echo 'Done'; 
  } else { 
    echo 'err'; 
  } 
} 
?> 
</body> 
</html>
