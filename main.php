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
    <link rel="stylesheet" href="Main.css">
    <script src="https://kit.fontawesome.com/6934051392.js" crossorigin="anonymous"></script>
</head>
<body>
        <?php
        echo "
            <div class='p_model' id='p_model'>
                <div class='model' id='model'>
                    <h1>Welcome ".$_SESSION['name']."</h1>
                    <p>
                        A very warm welcome to you! It is lovely to have you among us! It is our great pleasure to have you on board! A hearty welcome to you! We are glad to welcome you! Your presence is well appreciated, and we are delighted you are here.
                    </p>
                </div>
            </div>
        ";
        ?>
    </div>
    <main id='main' style='display: none'>
        <header>
            <div class="logo">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="pharmacie.php">Pharmacie</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="settings.php">Settings</a></li>
                </ul>
            </div>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass" onclick="search()"></i>
                <input type="search" name="" id="search" placeholder="Search">
            </div>
        </header>
        <div class="slider" id="slider" onclick="sliding()">
            <div class="chevron">            
                <i class='bx bx-chevron-left'></i>
            </div>
            <div class="description">
                <h1>
                    Image Title
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Quis soluta commodi ea
                    blanditiis adipisci quisquam? Provident suscipit
                    pariatur vel officiis cumque ab quae sapiente minima
                    sit, placeat rem nostrum at?
                </p>
            </div>
            <div class="chevron">            
                <i class='bx bx-chevron-right'></i>
            </div>
        </div>
        <div class="container" id="events">
            <div class="title" data-reveal="left">
                <img src="1.jfif" alt="">
            </div>
            <div class="infos">
                <h1 data-reveal="left">Image 1 Title</h1>
                <p data-reveal="left">
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Quis soluta commodi ea
                    blanditiis adipisci quisquam? Provident suscipit
                    pariatur vel officiis cumque ab quae sapiente minima
                    sit, placeat rem nostrum at?
                </p>
            </div>
            <div class="infos">
                <h1 data-reveal="left">Image 2 Title</h1>
                <p data-reveal="left">
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Quis soluta commodi ea
                    blanditiis adipisci quisquam? Provident suscipit
                    pariatur vel officiis cumque ab quae sapiente minima
                    sit, placeat rem nostrum at?
                </p>
            </div>
            <div class="title" data-reveal="right">
                <img src="2.jfif" alt="">
            </div>
            <div class="title" data-reveal="left">
                <img src="3.jfif" alt="">
            </div>
            <div class="infos">
                <h1 data-reveal="left">Image 3 Title</h1>
                <p data-reveal="left">
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Quis soluta commodi ea
                    blanditiis adipisci quisquam? Provident suscipit
                    pariatur vel officiis cumque ab quae sapiente minima
                    sit, placeat rem nostrum at?
                </p>
            </div>
            <div class="infos">
                <h1 data-reveal="left">Image 4 Title</h1>
                <p data-reveal="left">
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Quis soluta commodi ea
                    blanditiis adipisci quisquam? Provident suscipit
                    pariatur vel officiis cumque ab quae sapiente minima
                    sit, placeat rem nostrum at?
                </p>
            </div>
            <div class="title" data-reveal="right">
                <img src="4.jfif" alt="">
            </div>
        </div>
    </main>
    <footer style='display:none' id='foot'>
        <div class="f">
            <form action="Home.html">
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="Your Email">
                <textarea placeholder="Your Message"></textarea>
                <input type="submit" value="Send">
            </form>
            <div class="f2">
                <div class="logo"></div>
                <p>
                    <i class='bx bxs-phone'></i>
                    (222) 42157898
                </p>
                <p>
                    <i class='bx bx-envelope' ></i>
                    i20378.etu@isace.mr
                </p>
                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    Nouakchott Nord
                    Rue Inconnue 11298
                </p>
            </div>
        </div>
    </footer>
    <div class="footer">
        <p>Copyright all right reserved for Nouakchott Hospital</p>
    </div>
    <script src="script.js">
    </script>
</body>
</html>