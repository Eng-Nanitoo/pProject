<?php
    include 'connect.php';
    session_start();
    $passwordError = "";
    if(isset($_POST['submit'])){
        $name = $_SESSION['name'];
        $DrName = $_POST['DrName'];
        $date = $_POST['date'];
        $room = $_POST['room'];
        $password = $_POST['password'];
        if($password == $_SESSION['password']){
            $sql = "INSERT INTO reservation(room,DrName,date,username) values($room,'$DrName','$date','$name')";
            $conn->query($sql);
            header('Location: reservations.php');
        }
        else {
            $passwordError = "Incorrect Password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservations Form</title>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="reserv.css">
</head>
<body>
    <main>
        <div class="page">
            <div class="Reservation">Reservations</div>
            <form method="POST">
                <div class="form-group">
                    <label for="name">For :</label>
                    <input type="text" value='<?php echo $_SESSION['name']?>' readonly>
                </div>
                <div class="form-group">
                    <label for="doctor">With :</label>
                    <input type="text" id="doctor" name='DrName' placeholder="Doctor Name" required>
                </div>
                <div class="form-group">
                    <label for="password">Date :</label>
                    <input type="date" name='date' required>
                </div>
                <div class="form-group">
                    <label for="password">Confirm :</label>
                    <input type="password" name='password' placeholder="Your Password" required>
                </div>
                <span class="error"><?php echo $passwordError?></span>
                <div class="form-group" >
                    <label for="room">Room :</label>
                    <select name="room" id="room" required>
                        <option value="19200">19200</option>
                        <option value="32016">32016</option>
                        <option value="21404">21404</option>
                        <option value="40450">40450</option>
                        <option value="90100">90100</option>
                        <option value="10001">10001</option>
                        <option value="11120">11120</option>
                        <option value="77670">77670</option>
                    </select>
                </div>
                <div class="form-group-button">
                    <button type="submit" name='submit' class="confirm">Register</button>
                    <button type="reset" class="cancel-button">Cancel</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>