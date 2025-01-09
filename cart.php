<?php
    include 'connect.php';
    session_start();
    $name = $_SESSION['name'];
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "insert into user_product (username,productID) values ('$name',$id)";
        $conn->query($sql);
    }
    if(isset($_GET['deleteID'])){
        $deleteID = $_GET['deleteID'];
        $sql = "DELETE FROM user_product WHERE username = '$name' and productID = $deleteID";
        $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="cart.css">
    <script src="https://kit.fontawesome.com/6934051392.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <header>
            <form class="search">
                <i class='bx bx-search'></i>
                <input type="search" name="sInput" placeholder="Medicine and healthcare items">
            </form>
            <div class="adding">
                <a href="pharmacie.php">+ Add An Elemnt</a>
            </div>
        </header>
        <div class="container">
        <?php
                $sql = "SELECT * FROM product JOIN user_product ON product.ID = user_product.productID where user_product.username = '$name'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "
                                <div class='product'>
                                    <div class='img'>
                                        <img src='".$row['Path']."' alt=''>
                                    </div>
                                    <div class='details'>
                                        <h2>".$row['Name']."</h2>
                                    </div>
                                    <div class='price'>
                                        <h2 class='price'>
                                            $".$row['Price']."
                                        </h2>   
                                    </div>
                                    <form method='post' action='cart.php?deleteID=".$row['ID']."'  class='delete'>
                                        <button type='submit'>Delete <i class='bx bxs-trash' ></i></button>
                                    </form>
                                </div>
                        ";
                    }
                }
                else {
                    echo "<h1 class='vide'>There is Nothing to See !</h1>";
                }
                    ?>
        </div>
    </main>
</body>
</html>