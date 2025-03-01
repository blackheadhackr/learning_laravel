<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/desk.jpg">
  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <style>
    * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    -webkit-tap-highlight-color: transparent;
    }
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url(https://images.unsplash.com/photo-1497864149936-d3163f0c0f4b?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);  
      background-size: cover;
      background-repeat: no-repeat;
      font-family: sans-serif;
    }
    .login-box {
      position: relative;
      width: 400px;
      height: 450px;
      background-color: red;
      border: 1px solid #fff;
      border-radius: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: transparent;
      backdrop-filter: blur(5px);
    }
    h2 {
      color: #fff;
      font-size: 2rem;
      text-align: center;
    }
    .input-box {
      position: relative;
      width: 310px;
      margin: 30px 0;
      border-bottom: 2px solid #fff;
    }
    .input-box label {
      position: absolute;
      top: 50%;
      left: 5px;
      transform: translateY(-50%);
      color: #fff;
      font-size: 16px;
      transition: all 0.5s ease;
    }
    .input-box input:focus~label,
    .input-box input:valid~label {
      top: -5px;
    }

    .input-box input {
      width: 100%;
      height: 50px;
      background: transparent;
      border: none;
      outline: none;
      font-size: 1em;
      color: #fff;
      padding: 0 35px 0 5px;
    }
    .input-box .icon {
      position: absolute;
      right: 8px;
      font-size: 20px;
      color: white;
      line-height: 57px;
    }
    .remember-forgot {
      color: #fff;
      display: flex;
      justify-content: space-between;
    }
    .remember-forgot label,
    .remember-forgot a {
      margin: -15px 0 15px 0;
    }
    .remember-forgot label input {
      margin-right: 3px;
    }
    .remember-forgot a {
      color: #fff;
      text-decoration: none;
    }
    .remember-forgot a:hover {
      text-decoration: underline;
    }
    button {
      width: 100%;
      height: 40px;
      color: #000;
      background-color: #fff;
      border-radius: 20px;
      outline: none;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      border: 1px solid #fff;
      transition: all 0.3s ease;
    }
    button:hover {
      background-color: transparent;
      color: #fff;
    }
    .link {
      margin-top: 20px;
      color: #fff;
      text-align: center;
    }
    .link p a {
      text-decoration: none;
      color: #fff;
      font-weight: 600;
    }
    .link p a:hover {
      text-decoration: underline;
    }
    /* start  mobile */
    @media (max-width: 375px) {
      .login-box {
        width: 300px;
        height: 450px;
      }
      .input-box {
        position: relative;
        width: 275px;
        margin: 30px 0;
        border-bottom: 2px solid #fff;
      }
    }
    @media (min-width: 375px) and (max-width: 576px) {
      .login-box {
        width: 350px;
        height: 450px;
      }
      .input-box {
        position: relative;
        width: 275px;
        margin: 30px 0;
        border-bottom: 2px solid #fff;
      }
    }
    .er{
      color:rgb(248, 101, 101);
    }
    .alert {
      padding: 5px;
      background-color: #f3655b;
      color: white;
      opacity: 1;
      transition: opacity 0.6s;
      margin-bottom: 15px;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .closebtn:hover {
      color: black;
    }
    /* end  mobile */
  </style>
  <title>login page</title>
</head>
<body>
  <div class="login-box">
    <form action="{{route('user-login')}}" method="POST">
      @csrf
      <h2>Login</h2>
      <div class="input-box">
        <span class="icon">
          <i class="fa-solid fa-envelope"></i>
        </span>
        <input type="emal" id="email" name="email" required>
        <label for="email">Email</label>
      </div>
      <span class="er">@error('email') {{$message}}@enderror</span>
      <div class="input-box">
        <span class="icon">
          <i class="fa-solid fa-lock"></i>
        </span>
        <input type="password" id="pass" name="pass" required>
        <label for="pass">password</label>
      </div>
      <span class="er">@error('pass') {{$message}}@enderror</span>
      <div class="remember-forgot">
        <label>
          <input type="checkbox"> Remember me
        </label>
        <a href="#">forgot password?</a>
      </div>
      <button type="submit">Login</button>
      <div class="link">
        <p>
          Check developer account?
          <a href="https://in.linkedin.com/in/developerdharmender">LinkedIn</a>
          <a href="https://github.com/blackheadhackr">Github</a>
        </p>
        @if (session('error'))
        <p>
          <div class="alert">
            <span class="closebtn">&times;</span>  
            <strong>Danger!</strong> {{session('error')}}.
          </div>
        </p>
          @endif
      </div>
    </form>
  </div>
  <script>
    var close = document.getElementsByClassName("closebtn");
    var i;
    
    for (i = 0; i < close.length; i++) {
      close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
      }
    }
    </script>
</body>
</html>