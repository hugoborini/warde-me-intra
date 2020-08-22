<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/css/style.css">
</head>
<body class="login-body">

  <div class="login">
    <div class="login__head"></div>
    <div class="logo-container"> <img src="asset/logo.png"></div>
    <form action="/warde-me-intra/check" method="post">
    <input class="mb" type="text" placeholder="username" name="username">
    <input type="password" placeholder="mot de pass" name="password">
    <?php if (isset($_GET["error"]) && $_GET["error"] = 1){
      echo "<p class='error'>bad password or username</p>";
    } ?>
    <input class="submit" type="submit">
    </form>
  </div>

</body>
</html>