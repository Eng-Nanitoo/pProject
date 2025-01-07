<?php
    include 'connect.php';
    session_start();
    $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Reservations</title>
  <link rel="stylesheet" href="Reservations.css">
</head>
<body>
  <main>
      <div class="header">
        <h2>Reservations</h2>
        <button class="adding">+ Add One</button>
      </div>
        <div class="container">
          <div class="labels">
            <p>Doctor Name</p>
            <p>Room</p>
            <p>Date</p>
          </div>
          <?php
                $sql = "SELECT * FROM reservation where username = '$name'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "
                              <section>
                                <p>
                                  Dr <spanv class='doctor-area'>".$row['DrName']."</span>
                                </p>
                                <p class='number'>
                                  ".$row['room']."
                                </p>
                                <p class='date'>
                                  ".$row['date']."
                                </p>
                              </section>
                            
                            ";
                        }
                    }

          ?>
        </div>
  </div>
</body>
</html>
