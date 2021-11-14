<DOCTYPE HTML5>
    <html>
      <head>
        <link rel="stylesheet" type="text/css" href="/login-ui.css">
      </head>
    
      <body width="100%" height="100%">
        <form action="form.php" method="post" class="loginForm">
          <h2>Login</h2>
          <div class="idForm">
            <input type="text" name='id' class="id" placeholder="ID">
          </div>
          <div class="passForm">
            <input type="password" name='password' class="pw" placeholder="PW">
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
            Don't you have ID? <a href="#">sign up</a>
          </div>
        </form>
      </body>
    </html>