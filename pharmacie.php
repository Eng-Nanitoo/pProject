<?php
    include 'connect.php';
    session_start();
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
                <a href='sign_in.php'><i class='bx bxs-user' ></i> hogin</a>
            </div>
        </header>
        <div class="container">
            <div class="categories">
                <a href="#" class="active">Cardiology</a>
                <a href="#">Neurology</a>
                <a href="#">Pediatrics</a>
                <a href="#">Orthopedics</a>
            </div>
            <div class="products">
            <?php
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "
                            <div class='product'>
                                <img src=".$row['Path']." name='path'>
                                <div class='descriptions'>
                                    <p name='name'>".$row['Name']."</p>
                                    <h2 name='description'>
                                    ".$row['Description']."
                                    </h2>
                                    <div class='adding_p'>
                                    <a href='#' type='submit' name='submit'>+ Add to cart</a>
                                        <h2 name='price'>$".$row['Price']."</h2>
                                    </div>
                                </div>
                            </div>
                            
                            ";
                        }
                    }

                    ?>
            </div>
        </div>
    </main>
</body>
</html>