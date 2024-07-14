<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Sona Template">
  <meta name="keywords" content="Sona, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Login_page#</title>
  <link rel="stylesheet" href="css/loginStyles.css">

  <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


  <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="css/flaticon.css" type="text/css">

</head>

<body>

  <?php 
    include 'header.php';
  ?>

  <div class="bg-image">
    <div class="form-modal">
      
      <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">log in</button>
        <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
      </div>

      <div id="login-form">
        <form onsubmit="return validateLoginForm()">
            <input type="email" id="login-email" placeholder="Enter email " required />
            <input type="password" id="login-password" placeholder="Enter password" required/>
            <button type="submit" class="btn login">login</button>
            <p><a href="javascript:void(0)">Forgotten account</a></p>
            <hr/>
        </form>
      </div>

      <div id="signup-form">
        <form onsubmit="return validateSignupForm()"> 
            <input type="text" id="signup-email" placeholder="Enter your email" required/>
            <span id="e_error" class = "text-danger"></span>
            <input type="text" id="signup-username" placeholder="Choose username" required/>
            <span id = "user_error" class = "text-danger"></span>
            <input type="password" id="signup-password" placeholder="Create password" required/>
            <span id = "user_pass" class = "text-danger"></span>
            <button type="submit" class="btn signup">create account</button>
            <p>Clicking <strong>create account</strong> means that you agree to our <a href="javascript:void(0)">terms of services</a>.</p>
            <hr/>
        </form>
      </div>

    </div>
  </div>

  <?php
    include 'footer.php';
  ?>

  <script>
    function toggleSignup(){
      document.getElementById("login-toggle").style.backgroundColor="#fff";
      document.getElementById("login-toggle").style.color="#222";
      document.getElementById("signup-toggle").style.backgroundColor="rgb(30, 0, 0)";
      document.getElementById("signup-toggle").style.color="#fff";
      document.getElementById("login-form").style.display="none";
      document.getElementById("signup-form").style.display="block";
    }

    function toggleLogin(){
      document.getElementById("login-toggle").style.backgroundColor="rgb(30, 0, 0)";
      document.getElementById("login-toggle").style.color="#fff";
      document.getElementById("signup-toggle").style.backgroundColor="#fff";
      document.getElementById("signup-toggle").style.color="#222";
      document.getElementById("signup-form").style.display="none";
      document.getElementById("login-form").style.display="block";
    }

    function validateLoginForm() {
      var email = document.getElementById("login-email").value;
      var password = document.getElementById("login-password").value;
      if (!email || !password) {
        alert("Please fill out all fields.");
        return false;
      }
     // Additional validation logic can be added here

      return true;
    }

    function validateSignupForm() {
    var email = document.getElementById("signup-email").value;
    var username = document.getElementById("signup-username").value;
    var password = document.getElementById("signup-password").value;
    // var emailpattern = /^[a-zA-Z0-9.]+@[a-z]+.[a-z]$/;
    
    if (!email || !username || !password) {
        alert("Please fill out all fields.");
        return false;
    }

    if (username.length <= 2 || username.length > 20) {
      document.getElementById('user_error').innerHTML = "Username should be greater than 2 and less than 20 characters.";

        // alert("Username should be greater than 2 and less than 20 characters.");
        return false;
    }
    if(password == username) {
      document.getElementById('user_pass').innerHTML = "Password cannot be the same as username";
      return false;
    }

//   if(emailpattern.test(email)) {
//     document.getElementById('signup-email').style.border="2px solid red";
//     document.getElementById('e_error').innerHTML="Invalid E-Mail";
//     if(email.indexOf('@')<=0) {
//       document.getElementById('signup-email').style.border="2px solid red";
//       document.getElementById('e_error').innerHTML="@ invalid position";
//       return false;
//     }
    
//     if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3)!='.')){
//       document.getElementById('signup-email').style.border="2px solid red";
//       document.getElementById('e_error').innerHTML=".invalid position";
//     }
//     return false;
//   }

//   else {
//   return false;
//   }


//     // Additional validation logic can be added here

//     return true;
}


  </script>
  
</body>
</html>
