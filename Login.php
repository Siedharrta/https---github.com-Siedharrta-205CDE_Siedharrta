<!doctype html>
<html>
    <head>
       <meta charset="utf-8">
       <title>PhotoBooth | Login</title>      
        <link rel="stylesheet" href="assets/Login.css">
        <link rel="icon" type="image/png" href="assets/Icon.png">
       </head>
    <body>
        <div class="container" id="container">
          <div class="form-container sign-up-container">
          <form action="signup.inc.php" method="post">
            <h1>Sign Up</h1><br>
              <input type="text" name="user_name" placeholder="Username" />
              <input type="password" name="password" placeholder="Password" />
              <input type="password" placeholder="Confirm Password" /><br>
              <button>Sign Up</button>
            </form>
          </div>
          <div class="form-container sign-in-container">
          <form action="login.inc.php" method="post">
              <h1>Sign In</h1><br>
              <input type="username" name="user_name" placeholder="Username" />
              <input type="password" name="password" placeholder="Password" /><br>
              <button>Sign In</button>
            </form>
          </div>
          <div class="overlay-container">
            <div class="overlay">
              <div class="overlay-panel overlay-left">
                <img src="assets/Logo.png" width="491" height="315">
                <button class="ghost" id="signIn">Sign In</button>
              </div>
              <div class="overlay-panel overlay-right">
                <img src="assets/Logo.png" width="491" height="315">
                <button class="ghost" id="signUp">Sign Up</button>
              </div>
            </div>
          </div>
        </div>
        <script>
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
              container.classList.add("right-panel-active");
            });

            signInButton.addEventListener('click', () => {
              container.classList.remove("right-panel-active");
            });
        </script>
    </body>
</html>