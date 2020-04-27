<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">

</head>
<body>
<div class="container">
  <form action="loginlink.php" method="POST">
    <div class="row">
      <h1 style="text-align:center">login</h1>
      <div class="col">
        <input type="text" name="username" placeholder="username" >
        <input type="password" name="password" placeholder="Password" >
        <input type="submit" name="submit" value="submit" placeholder="submit">
        <p>Don't have an account? <a href="signup.php">Sign up now</a></p>
      </div>
    </div>
  </form>
</div>
</body>
</html>
