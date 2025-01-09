<?php
    include 'connect.php';
    session_start();
    $categories = array('Cardiology','Neurology','Pediatrics','Orthopedics');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Pharmacie.css">
</head>
<body>
    <main>
        <header>
            <div class="logo">
                <h1>Medicare</h1>
            </div>
            <form action="pResult.php" class="search" method="get">
                <i class='bx bx-search'></i>
                <input type="search" name = "sInput" placeholder="Medicine and healthcare items">
            </form>
            <div class="nav">
                <a class="active" href="#"><i class='bx bxs-badge-dollar'></i> Offers</a>
                <a href="cart.php"><i class='bx bxs-cart-add' ></i> Cart</a>
                <a href='sign_in.php'><i class='bx bxs-user' ></i>Login</a>
            </div>
        </header>
        <div class="container">
            <div class="categories">
                <a href="#Cardiology" class="active">Cardiology</a>
                <a href="#Neurology">Neurology</a>
                <a href="#Pediatrics">Pediatrics</a>
                <a href="#Orthopedics">Orthopedics</a>
            </div>
            <?php
            for($i = 0; $i < 4; $i++){
                $sql = "SELECT * FROM product where Categorie = '". $categories[$i]."'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    echo "<p class='cato' id='".$categories[$i]."'>".$categories[$i]."</p><hr>";
                    echo  "<div class='products'>";
                    while($row = $result->fetch_assoc()){
                            echo "
                                <div class='product'>
                                    <form method='post' action='cart.php?id=".$row['ID']."' >
                                        <img src=".$row['Path'].">
                                        <div class='descriptions'>
                                            <p>".$row['Name']."</p>
                                            <h2>
                                            ".$row['Description']."
                                            </h2>
                                            <div class='adding_p'>
                                                <button type='submit'>+ Add to cart</button>
                                                <h2>$".$row['Price']."</h2>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            ";
                    }
                        echo "</div>";
                    }
            }
                    ?>
        </div>
    </main>
</body>
</html>