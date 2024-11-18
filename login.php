<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login/Register</title>
        <link rel="stylesheet" href="login.css">
        <link rel="icon" type="image/x-icon" href="Home.png">
    </head>
<body>
    
  <div class="container">
      <div class="loginbg">
          <div class="box signin">
              <h2>Already Have an Account ?</h2>
              <button class="signinbtn">Sign in</button>
          </div>
          <div class="box signup">
            <h2>Dont Have an Account ?</h2>
            <button class="signupbtn">Sign up</button>
          </div>
      </div>
      <div class="formbx">
        <div class="form signinform">
            <form>
                <h2>Foodies</h2>
                <h3>Sign In</h3>
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <a href="home.php">
                <input type="button" value="Login">
                </a>
                <a href="#" class="forgot">Forgot password?</a>
            </form>
        </div>
        <!-- <input type="text" class="input-box" id="fname" name="fname"placeholder="User Name">
        <input type="text" class="input-box" id="email" name="email" placeholder="Your Email">
        <input type="password" class="input-box" id="password" name="password" placeholder="User Password">
        <p><span><input type="checkbox" ></span>all info are right</p>
        <input type="submit" value="save" class="buttonsign" onclick="window.location.href='profile.html';" />
        <button type="button" onclick="window.location.href='profile.html';" class="buttonsign" >Sign Up</button> -->
        <div class="form signupform">
            <form action="c.php" method="POST">
                <h3>Sign up</h3>
                <input type="text" placeholder="Enter Your Name"id="fname" name="fname">
                <input type="text" placeholder="Email" id="email"name="email">
                <input type="date" placeholder=" Enter your Date of birth" id="dob" name="dob" >
                <input type="password" placeholder="Password" id="password" name="password">
                
                <input type="submit" value="Sign Up">
            </form>
        </div>
      </div>
      </div>
<script>
    const signinbtn = document.querySelector('.signinbtn');
    const signupbtn = document.querySelector('.signupbtn');
    const formbx = document.querySelector('.formbx'); 
    const body = document.querySelector('body')

    signupbtn.onclick = function(){
        formbx.classList.add('active')
        body.classList.add('active')
    }
    signinbtn.onclick = function(){
        formbx.classList.remove('active')
        body.classList.remove('active')
    }
    </script>
      
</body>
</html>