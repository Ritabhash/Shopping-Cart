<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is set direct to index
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $upass = $_POST['pass'];

    $password = hash('sha256', $upass); // password hashing using SHA256
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email= ?");
    $stmt->bind_param("s", $email);
    /* execute query */
    $stmt->execute();
    //get result
    $res = $stmt->get_result();
    $stmt->close();

    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

    $count = $res->num_rows;
    if ($count == 1 && $row['password'] == $password) {
        $_SESSION['user'] = $row['id'];
        header("Location: index.php");
    } elseif ($count == 1) {
        $errMSG = "Bad password";
    } else $errMSG = "User not found";
}
?>


<html>

<head>
  <title>Login</title>

<link href="style.css" rel="stylesheet">
<body style="background: #0ca3d2;">
    <div class="login">
      <h1>Login to Tee Hees</h1>
      <form method="post">
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="password" name="pass" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="btn-login" value="Login"></p>
	<?php
                if (isset($errMSG)) {

                    ?>
                    <div>
 <?php echo $errMSG; ?>
                        </div>
                    <?php
                }
                ?>
      </form>
    </div>


</body>

</html>
