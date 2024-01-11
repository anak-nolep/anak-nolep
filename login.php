<!DOCTYPE html>
<html lang="en">
  <!--    
    you definitely like using php
     have you ever tried nextjs ?
    -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      .container {
        width: 300px;
        margin: 50px auto;
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        box-sizing: border-box;
      }
      button {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Login Form</h2>
      <form id="loginForm" action="/login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
        <button type="button" onclick="submitForm()">Submit</button>
      </form>
    </div>
    <script>
      function submitForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username && password) {
          alert("epic php stuff going on");
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "/login.php", true);
          xhr.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
          );
          xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
              var response = JSON.parse(xhr.responseText);
              alert(response.message);
            }
          };
          xhr.send(
            "username=" +
              encodeURIComponent(username) +
              "&password=" +
              encodeURIComponent(password)
          );
        }
      }
    </script>
  </body>
</html>