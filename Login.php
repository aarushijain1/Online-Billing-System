<?php
    session_start();

    $error_message = '';
    if($_POST){

        include("connection.php");

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = 'SELECT *  FROM users WHERE users.email="'. $username . '" AND users.password = "'. $password. '"';
        $stmt = $conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount()>0) {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetchAll()[0];
            $_SESSION['user']=$user;
            
            header('Location: dashboard.php');

        } else $error_message = 'Please make sure that the username and password are correct.';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="Login.css">
  <title>IGDTUW</title>
</head>

<body id="loginBody">
  <?php if(!empty($error_message)) { ?>
      <div id="errorMessage">
      <strong>Error: </strong><p><?=$error_message ?></p>
  </div>
  <?php } ?>

  <div class="navbar">
    <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
    <div class="loginHeader">
      <p><strong> Indira Gandhi Delhi Technical University for Women (IGDTUW)</strong></p>
      <p><strong>Cloud Based University Teacher Information System</strong></p>
      <p>Kashmere Gate, Delhi-110006</p>
      <p>(An ISO 9001:2015 Certified University)</p>
    </div>
  </div>

  <div class="container">
    <div class="loginBody">
      <form action="Login.php" method="POST">
        <div class="loginInputsContainer">
          <label for="">User name</label>
          <input name="username" id="username" placeholder="User name" type="email" />
        </div>
        <div class="loginInputsContainer">
          <label for="">Password</label>
          <input name="password" id="password" placeholder="Password" type="password" />
        </div>

        <div class="loginButtonContainer">
          <button id="a" type="submit">Sign In</button>
          <button id="b">Forgot Password</button>
          <button id="c"> New user register here</button>
        </div>
      </form>
    </div>
  </div>

  <!-- <footer>
    &copy; 2021 All Rights Reserved | Indira Gandhi Delhi Technical University for Women (IGDTUW)
  </footer> -->

</body>

</html>