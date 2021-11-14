<DOCTYPE HTML5>
    <html>
      <head>
        <link rel="stylesheet" type="text/css" href="css/login-ui.css">
      </head>
      <body width="100%" height="100%">
        <form action="login_ok.php" method="post" class="loginForm">
          <h2>Login</h2>
          <div class="idForm">
            <input type="text" name='user_id' class="id" placeholder="ID">
          </div>
          <div class="passForm">
            <input type="password" name='user_pw' class="pw" placeholder="PW">
          </div>
          <button type="submit" class="btn" onclick="button()">
            LOG IN
          </button>
          <script>
              let button = () => {
                alert('login Button !')
            }
          </script>
          <div class="bottomText">
            Don't you have ID? <a href="create_id.php">sign up</a>
          </div>
        </form>
      </body>
    </html>