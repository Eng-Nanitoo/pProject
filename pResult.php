<?php
    include 'connect.php';
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
            <div class="nav">
                <a class="active" href="#"><i class='bx bxs-badge-dollar'></i> Offers</a>
                <a href="cart.php"><i class='bx bxs-cart-add' ></i> Cart</a>
                <a href="sing_in.html"><i class='bx bxs-user' ></i> Login</a>
            </div>
        </header>
        <div class="container">
            <a href="pharmacie.php">SEE ALL PRODUCTS -></a>
            <div class="categories">
                <a href="#" class="active">Cardiology</a>
                <a href="#">Cardiology</a>
                <a href="#">Cardiology</a>
                <a href="#">Cardiology</a>
            </div>
            <div class="products">
            <?php
                $search = $_GET['sInput'];
                if(!empty($search)){
                    $sql = "SELECT * FROM product where Name like '%".$search."%' or Description like '%".$search."%' or Price like '%".$search."%'";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo "
                            <div class='product'>
                                <img src=".$row['Path'].">
                                <div class='descriptions'>
                                    <p>".$row['Name']."</p>
                                    <h2>
                                    ".$row['Description']."
                                    </h2>
                                    <div class='adding_p'>
                                    <a href='#'>+ Add to cart</a>
                                        <h2>$".$row['Price']."</h2>
                                    </div>
                                </div>
                                </div>
                                
                                ";
                            }
                    }
                    else {
                        echo "<p class='searchR'>No Results</p>";
                    }
                }
            ?>
            </div>
        </div>
    </main>
</body>
</html>