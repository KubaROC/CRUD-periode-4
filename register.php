<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/admin.css" />
    <title>Admin Login</title>
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form action="php/register.php" method="POST">
        <input type="text" name="username" placeholder="Username" /><br />
        <input type="text" name="mail" placeholder="E-mail" /><br />
        <input type="password" name="password" placeholder="Password" /><br />
        <input class="login" type="submit" value="Register" />
        <input class='login' type='submit' value='Go to login' formaction='accountlogin.php'>

        
      </form>
    </div>
  </body>
</html>