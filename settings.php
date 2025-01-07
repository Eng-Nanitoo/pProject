<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Settings.css">
</head>
<body>
    <main>
        <h1>Profile</h1>
        <p>Information</p>
        <header>
            <div class="user">
                <i class='bx bxs-user'></i>
            </div>
            <div class="infos">
                <h2>
                    Username <?php echo $_SESSION['name']; ?>
                </h2>
                <h3>
                    Date Creation <?php echo $_SESSION['date']; ?>         
                </h3>
            </div>
        </header>
        <div class="container">
            <p>Activities</p>
            <section>
                <a href="reservations.php">
                    <i class='bx bx-list-ul'></i>
                    Reservation
                </a>
            </section>
            <section>
                <a href="labo.php">
                    <i class='bx bx-test-tube'></i>
                    Labo Results
                </a>
            </section>
            <section>
                <a href="event.php">
                    <i class='bx bxs-calendar-alt'></i>
                    Events
                </a>
            </section>
        </div>
        <a href="index.php" class="">
            <i class='bx bx-log-out' ></i> Log out
        </a>
    </main>
</body>
</html>