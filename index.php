<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css"/>
  </head>
  <body>
    <div class="formWrapper">
      <form action="login.php" method="post" class="formContent">
        <p class="formHeading">Welcome, please enter your details.</p>
        <div class="inputs">
          <div class="inputWrapper">
            <input type="text" name="username" id="username" placeholder="Username" required/>
          </div>
          <div class="inputWrapper">
            <input type="password" name="password" id="password" placeholder="Password" required/>
          </div>
          <div class="buttonWrapper">
            <button class="button" name="submit" type="submit">Login</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
