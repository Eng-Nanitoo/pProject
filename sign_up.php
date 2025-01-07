<?php
    include 'connect.php';
    $nameError = $emailError = $passwordError = "";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        // if(strlen($password) < 8){
        //     $passwordError = "Password must contain 8 characters";
        // }
        // if(){
            $sql = "SELECT * FROM user WHERE username='$username' or email='$email'";
            $result = $conn->query($sql);
            if($result->num_rows == 0){
                $sql = "INSERT INTO user(username,email,password) values('$username','$email','$password')";
                $conn->query($sql);
                echo "Row effected";
            }
            else{
                $sql1 = "SELECT username FROM user WHERE username='$username'";
                $sql2 = "SELECT email FROM user WHERE email='$email'";
                $result1 = $conn->query($sql1);
                $result2 = $conn->query($sql2);
                if($result1->num_rows > 0){
                    $nameError = "username exist";
                }
                if($result2->num_rows > 0){
                    $emailError = "email exist";
                }
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="sign_up.css">
</head>
<body>
    <main>
        <div class="form-box">
            <img src="logo.jfif" class="logo">
        </div>

        <div class="form-card">
            <h3>Personnal Informations</h3>
            <p>Entrer Your Information In The Field Bllow</p>
            <div class="infos">
                <form method="post">
                    <label for="username">Username</label><input type="text" name="username" required>
                    <span><?php echo $nameError?></span>
                    <label for="email">Email</label> <input type="email" name="email" required>
                    <span><?php echo $emailError?></span>
                    <label for="Password">Password</label><input type="password"  name="password" required>
                    <span><?php echo $passwordError?></span>
                    <div class="button-group">
                        <button type="reset" class="cancel-btn">Cancel</button>
                        <button type="submit" name="submit" class="login-btn">Login</button>
                    </div>
                    <p class="p-sign">You already have an account? <a href="sing_in.html">Se connecter</a></p>
                </form>
                <div class="user">
                    <i class='bx bxs-user'></i>
                </div>
            </div>
        </div>
    </main>
</body>
</html>