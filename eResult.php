<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Events.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/6934051392.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <header>
            <div class="logo">
                <img src="logo.jfif" alt="">
            </div>
            <form class="search">
                <i class="fa-solid fa-magnifying-glass" onclick="search()"></i>
                <input type="search" name="sInput" id="search" placeholder="Search For An Event">
            </form>
        </header>
        <h1 id="title">Events</h1>
        <div class="container">
            <?php
                $search = $_GET['sInput'];
                $sql = "SELECT * FROM event where name like '%".$search."%' or Description like '%".$search."%' or eDTime like '%".$search."%'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "
                            <section class='event'>
                                <div class='details'>
                                    <h3>".$row["eDTime"]."</h3>
                                </div>
                                <div class='infos'>
                                    <h1>".$row["name"]."</h1>
                                    <p>
                                        ".$row["description"]."
                                    </p>
                                </div>
                                <form method='post' class='joiner'>
                                    <button class='join' type='submit' name='join'>
                                        + Join
                                    </button>
                                </form>
                            </section>
                        ";
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>