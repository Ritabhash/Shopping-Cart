<?php
ob_start();
session_start();

if (isset($_SESSION['user']) != "") {
    header("Location: index.php");
}
include_once 'dbconnect.php';

if (isset($_POST['signup'])) {

    $uname = trim($_POST['uname']); // get posted data and remove whitespace
    $email = trim($_POST['email']);
    $upass = trim($_POST['pass']);

    // hash password with SHA256;
    $password = hash('sha256', $upass);

    // check email exist or not
    $stmt = $conn->prepare("SELECT email FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $count = $result->num_rows;

    if ($count == 0) { // if email is not found add user


        $stmts = $conn->prepare("INSERT INTO users(username,email,password) VALUES(?, ?, ?)");
        $stmts->bind_param("sss", $uname, $email, $password);
        $res = $stmts->execute();//get result
        $stmts->close();

        $user_id = mysqli_insert_id($conn);
        if ($user_id > 0) {
            $_SESSION['user'] = $user_id; // set session and redirect to index page
            if (isset($_SESSION['user'])) {
                print_r($_SESSION);
                header("Location: index.php");
                exit;
            }

        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again";
        }

    } else {
        $errTyp = "warning";
        $errMSG = "Email is already used";
    }

}
?>

<html>

<head>
  <title>Registration</title>

<link href="style.css" rel="stylesheet">
<body style="background: #0ca3d2;">
    <div class="login">
      <h1>Register to Tee Hees</h1>
      <form method="post">
	<p><input type="text" name="uname" placeholder="Full name" required/></p>
        <p><input type="text" name="email" placeholder="Email" required/></p>
        <p><input type="password" name="pass" placeholder="Password" required/></p>
        <p class="submit"><input type="submit" name="signup" value="Submit"></p>
	<?php
                if (isset($errMSG)) {

                    ?>
                    <div> <?php echo $errMSG; ?>
                        </div>
                    <?php
                }
                ?>
      </form>
    </div>
<button><a href="a.html">HOME</a></button>

</body>

</html>
