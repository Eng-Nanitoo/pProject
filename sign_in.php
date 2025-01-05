<?php
    include 'connect.php';
    $nameError = "";
    $passwordError = "";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($password) and empty($username)){
            $nameError = "Name is Required";
            $passwordError = "Password is Required";
        }
        else{
            $sql = "SELECT * FROM user WHERE username='$username'and password = '$password'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                require 'main.php';
            }
            else{
                $passwordError = "Incorrect Data";
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
    <link rel="stylesheet" href="sign_in.css">
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
                    <label for="username">Username or Email</label>
                    <input type="text" name="username" >
                    <span><?php echo $nameError?></span>
                    <label for="Password">Password</label>
                    <input type="password"  name="password" >
                    <span><?php echo $passwordError?></span>
                    <div class="button-group">
                        <button type="reset" class="cancel-btn">Cancel</button>
                        <button type="submit" name="submit" class="login-btn">Login</button>
                    </div>
                    <p class="p-sign">Don't you have an account? <a href="sign_up.php">Create one</a></p>
                </form>
                <div class="user">
                    <i class='bx bxs-user'></i>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

<?php
    
?>