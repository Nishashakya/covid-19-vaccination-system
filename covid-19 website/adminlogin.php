
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/adminlog.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
          <div class="col-left">
            <div class="login-text">
              <h2>Welcome Back</h2>
              <p><br>covid-19 vaccination mgt sys</p>
              
            </div>
          </div>
          <div class="col-right">
            <div class="login-form">
              <h2>Login</h2>
              <form method="POST" action="">
                <p>
                  <label>Username or email address<span>*</span></label>
                  <input type="text" name="email"  placeholder="Username or Email" required>
                </p>
                <p>
                  <label>Password<span>*</span></label>
                  <input type="password" name="password"  placeholder="Password" required>
                </p>
                <p>
                  <input type="submit" name="login" value="log In" />
                </p>
                <p>
                  <a href="">Forget Password?</a>
                </p>
              </form>
            </div>
          </div>
        </div>
        
      </div>
      <?php
        if(isset($_POST['login'])){
          $query="SELECT * FROM `adminlogin` WHERE 'email'=$_POST[email] AND 'password'=$_POST[password]";
          $res=mysqli_query($conn,$query);
          if(mysqli_num_rows($res)==1)
          {
            session_start();
            $_SESSION['loginId']=$_POST['email'];
            header("location:adminpanel.php");
          }
          else{
            echo"<script>alert('wrong password plz check the password')</script>";

          }
        }
          ?>
        
</body>
</html>