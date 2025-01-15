<?php
    include 'connect.php';
    session_start();
    $username = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labo  Results</title>
    <link rel="stylesheet" href="labo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<div class="container">
    <h1>Labo Results</h1>
        <div class="results">
            <div class="tst">
                <h2>Test</h2>
                <h2 class="resu">Results</h2>
            </div>
            <?php
                $sql = "SELECT * FROM labo_results where username = '$username'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "
                            <div class='results-card'>
                                <p class='test'>".$row['name']." Test</p>
                                <p class='statuts positive'>".$row['result']."</p>
                                <p><i class='bx bxs-info-circle' style='color:#fff4f4'></i></p>
                            </div>
                        ";
                    } 

                }
                else {
                    echo "<h1>Nothing to see</h1>";
                }
            ?>
        </div>
    </div>
</body>
</html>