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
                <form action="sign_in.php" method="post">
                    <label for="username">Username</label> <input type="text" name="username" required>
                    <label for="email">Email</label> <input type="email" name="email" required>
                    <label for="Password">Password</label><input type="password"  name="password" required>
                    <div class="button-group">
                        <button type="reset" class="cancel-btn">Cancel</button>
                        <button type="submit" class="login-btn">Login</button>
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