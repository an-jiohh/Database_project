    <DOCTYPE HTML5>
    <html>
      <head>
        <link rel="stylesheet" type="text/css" href="css/login-ui.css">
      </head>
      <body width="100%" height="100%">
        <form action="create_ok.php" method="post" class="loginForm">
          <h2>Sign up</h2>
          <div class="idForm">
            <input type="text" name='user_id' class="id" placeholder="ID">
          </div>
          <div class="passForm">
            <input type="password" name='user_pw1' class="pw" placeholder="PW">
          </div>
          <div class="passForm">
            <input type="password" name='user_pw2' class="pw" placeholder="Check PW">
          </div>
          <button type="submit" class="btn" onclick="button()">
            LOG IN
          </button>
          <script>
              let button = () => {
                alert('Sign up Button !')
            }
          </script>
        </form>
      </body>
    </html>