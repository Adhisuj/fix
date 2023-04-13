<!DOCTYPE html>
<html>
<head>
    <script>
       function fun(){
        var email=document.getElementById("email").value;
        var password=document.getElementById("password").value;
        if(email=="adhikarisuj1234@gmail.com" && password=="adhikari@1234"){
      window.location.replace("http://localhost/edification-main/theme/dashboard/d1.php");
    //  alert("thankyou");
           
    
        }
        else{
            alert("invalid email or password");
            return;
        }
    
        }
       
    </script>
<title> login admin form</title>
<link rel="stylesheet" href="user.css">
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" action="dashboard/d1.php">
          <input type="email" placeholder="username" required id="email"/>
          <input type="password" placeholder="password" required id="password"/>
       <button onclick="fun()" > submit</button>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
      </div>
    </div>
</body>

</html>